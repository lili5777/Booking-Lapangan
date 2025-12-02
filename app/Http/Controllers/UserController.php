<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\kategori;
use App\Models\konfirmasi;
use App\Models\lapangan;
use App\Models\operasional;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use DateTime;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.home');
    }

    public function lapangan()
    {
        $lapangan = lapangan::where('is_active_222142', 1)->get();
        $kategori = kategori::all();

        return view('user.lapangan', compact('lapangan', 'kategori'));
    }

    public function kontak()
    {

        return view('user.kontak');
    }

    public function riwayat()
    {
        $user = Auth::user();
        $lapangan = lapangan::all();
        $kategori = kategori::all();
        $konfir = konfirmasi::all();
        if (!$user) {
            return redirect('/login')->withErrors(['error' => 'Silakan login terlebih dahulu.']);
        }
        // dd($konfir);
        $booking = booking::where('id_user', $user->id)->orderBy('id', 'desc')->get();
        return view('user.riwayat', compact('booking', 'lapangan', 'kategori', 'konfir'));
    }

    public function pesan(Request $request, $id)
    {
        // dd( now()->format('Y-m-d H:i:s'));

        $request->validate([
            'tanggal' => 'required|date_format:Y-m-d|after_or_equal:' . now()->format('Y-m-d'),
        ]);
        $tanggal=$request->tanggal;
        $isToday = Carbon::parse($tanggal)->isToday();
        $lapangan = lapangan::where('id', $id)->first();
        $kategori = Kategori::where('id', $lapangan->id_kategori)->first();
        // dd($request->all());
        $user = Auth::user();
        if ($user) {
            $tanggal = $request->tanggal;
            $jam = booking::where('id_lapangan', $id)
                ->where('tgl_booking_222142', $tanggal)
                ->get();

            $operasional = operasional::first();
            if (!$operasional) {
                return redirect()->back()->with('error', 'Data operasional tidak ditemukan');
            }
            // Format jam_buka dan jam_tutup menjadi H:i
            $jam_buka = \Carbon\Carbon::createFromFormat('H:i:s', $operasional->jam_buka_222142)->format('H:i');
            $jam_tutup = \Carbon\Carbon::createFromFormat('H:i:s', $operasional->jam_tutup_222142)->format('H:i');

            return view('user.pesan', compact('tanggal', 'jam', 'operasional', 'user', 'id', 'jam_buka', 'jam_tutup', 'kategori', 'isToday','tanggal'));
        }
        return redirect('/login')
            ->withInput()
            ->withErrors(['gagalpesan' => 'Login Terlebih Dahulu']);
    }


    public function detailpesanan(Request $request)
    {
        $request->validate([
            'selected_times' => 'required|string',
        ]);

        $lapangan = lapangan::where('id', $request->id_lapangan)->first();
        $kategori = Kategori::where('id', $lapangan->id_kategori)->first();
        $tgl = $request->tgl_booking;

        // Ubah string `selected_times` menjadi array
        $selectedTimes = explode(',', $request->selected_times);
        sort($selectedTimes); // Urutkan jam

        // Validasi
        if (count($selectedTimes) < 1) {
            return redirect()->back()->withErrors(['error' => 'Harap pilih setidaknya satu jam']);
        }

        // PERBAIKAN: Hitung durasi berdasarkan jumlah jam yang dipilih, bukan range waktu
        $totalJam = count($selectedTimes);

        // Waktu mulai dan selesai untuk display
        $mulai = $selectedTimes[0];
        $selesai = $selectedTimes[count($selectedTimes) - 1];

        // Hitung total harga berdasarkan jumlah jam yang dipilih
        $totalHarga = $totalJam * $kategori->harga_222142;

        return view('user.detailpesanan', compact('lapangan', 'kategori', 'tgl', 'mulai', 'selesai', 'selectedTimes', 'totalJam', 'totalHarga'));
    }


    public function simpanbooking(Request $request)
    {
        $user = Auth::user();
        $id_lapangan = $request->id_lapangan;
        $tgl_booking = $request->tgl_booking;
        $jam_mulai = $request->jam_mulai;
        $jam_selesai = $request->jam_selesai;
        $total = $request->totalHarga;

        $booking = new booking();
        $booking->id_user =  $user->id;
        $booking->id_lapangan =  $id_lapangan;
        $booking->tgl_booking_222142 =  $tgl_booking;
        $booking->jam_mulai_222142 =  $jam_mulai;
        $booking->jam_selesai_222142 =  $jam_selesai;
        $booking->total_222142 = $total;
        $booking->status_222142 = 'proses';
        $booking->save();
        return redirect()->route('riwayat')->with('Success', 'Booking Berhasil silahkan konfirmasi pembayaran');
    }



    public function detail($id)
    {
        $lapangan = lapangan::where('id', $id)->first();
        $kategori = kategori::where('id', $lapangan->id_kategori)->first();
        return view('user.detail', compact('lapangan', 'kategori'));
    }
    public function konfir($id)
    {
        $user = Auth::user();
        return view('user.konfirmasibukti', compact('id'));
    }

    public function prosesupload(Request $request)
    {
        $konfir = new konfirmasi();
        $konfir->id_booking = $request->id_booking;
        if ($request->hasFile('foto')) {
            $originalName = $request->file('foto')->getClientOriginalName();
            $uniqueName = time() . '_' . $originalName;
            $request->file('foto')->move(public_path('images'), $uniqueName);
            $konfir->foto_222142 =  $uniqueName;
        }
        // dd($konfir);
        $konfir->save();
        return redirect()->route('riwayat')->with('Success', 'bukti pembayaran Berhasil silahkan menunggu');
    }


    public function cetak(Request $request)
    {
        $user = User::all();
        $lapangan = Lapangan::all();
        $kategori = kategori::all();
        $bookings = collect();

        if ($request->has('daily_date')) {
            // Filter Harian
            $bookings = Booking::whereDate('tgl_booking_222142', Carbon::parse($request->daily_date))->get();
            $judul = 'Harian - ' . Carbon::parse($request->daily_date)->format('d M Y');
        } elseif ($request->has('weekly_start') && $request->has('weekly_end')) {
            // Filter Mingguan
            $start = Carbon::parse($request->weekly_start)->startOfDay();
            $end = Carbon::parse($request->weekly_end)->endOfDay();
            $bookings = Booking::whereBetween('tgl_booking_222142', [$start, $end])->get();
            $judul = 'Mingguan - ' . $start->format('d M Y') . ' s/d ' . $end->format('d M Y');
        } elseif ($request->has('monthly_month') && $request->has('tahun')) {
            // Filter Bulanan
            $month = $request->monthly_month;
            $year = $request->tahun;
            $bookings = Booking::whereMonth('tgl_booking_222142', $month)->whereYear('tgl_booking_222142', $year)->get();
            $judul = 'Bulanan - ' . DateTime::createFromFormat('!m', $month)->format('F') . ' ' . $year;
        } elseif ($request->has('yearly_year')) {
            // Filter Tahunan
            $year = $request->yearly_year;
            $bookings = Booking::whereYear('tgl_booking_222142', $year)->get();
            $judul = 'Tahunan - ' . $year;
        } else {
            // Jika tidak ada filter
            $judul = 'Semua Data Booking';
            $bookings = Booking::all();
        }

        $pdf = PDF::loadview('cetak', [
            'bookings' => $bookings,
            'judul' => $judul,
            'user' => $user,
            'lapangan' => $lapangan,
            'kategori' => $kategori

        ]);

        return $pdf->download('laporan-booking.pdf');
    }


    // public function pesanlap($id)
    // {
    //     $user = Auth::user();
    //     if ($user) {
    //         return view('user.detail');
    //     }
    //     return redirect('/login')
    //         ->withInput()
    //         ->withErrors(['gagalpesan' => 'Login Terlebih Dahulu']);
    // }
}
