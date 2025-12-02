<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\kategori;
use App\Models\konfirmasi;
use App\Models\lapangan;
use App\Models\operasional;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;

class AdminController extends Controller
{
    //
    public function index()
    {
        $pengguna = User::all()->count();
        $lapangan = lapangan::all()->count();
        $pesan = booking::all()->count();
        $konfir = konfirmasi::all()->count();
        return view('admin.dashboard', compact('pengguna', 'lapangan', 'pesan', 'konfir'));
    }

    public function pengguna()
    {
        $data = User::all();
        return view('admin.pengguna.data_pengguna', compact('data'));
    }

    public function tambah_pengguna()
    {
        return view('admin.pengguna.data_penggunatambah');
    }

    public function proses_tambah_pengguna(Request $request)
    {

        if ($request->id) {
            $user = User::findOrFail($request->id);
            $user->username =  $request->username;
            $user->name =  $request->name;
            $user->email =  $request->email;
            $user->no_WA =  $request->no_WA;
            $user->level = 'user';
            $user->tgl_pendaftaran;
            $user->password;
            $user->save();
            return redirect()->route('admin_pengguna')->with('Success', 'berhasil diupdate');
        }
        $request->validate(
            [
                'username' => 'required|alpha_num|min:5|max:15|unique:users',
                'name' => 'required',
                'email' => 'required|unique:users',
                'no_WA' => 'required',
                'password' => 'required|string|min:6|max:10',
            ],
            [
                'username.alpha_num' => 'Username hanya menerima angka dan huruf',
                'username.min' => 'Username minimal 5 karakter',
                'username.max' => 'Username maksimal 15 karakter',
            ]
        );
        $user = new User();
        $user->username =  $request->username;
        $user->name =  $request->name;
        $user->email =  $request->email;
        $user->no_WA =  $request->no_WA;
        $user->password = bcrypt($request->password);
        $user->level = 'user';
        $user->tgl_pendaftaran = Carbon::now(); //mengikuti tanggal sekarang
        $user->save();
        return redirect()->route('admin_pengguna')->with('Success', 'berhasil ditambahkan');
    }

    public function edit_pengguna($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pengguna.data_penggunatambah', compact('user'));
    }

    public function hapus_pengguna($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin_pengguna')->with('Success', 'berhasil dihapus');
    }

    // kategori
    public function kategori()
    {
        $data = kategori::all();
        return view('admin.kategori.data_kategori', compact('data'));
    }

    public function tambah_kategori()
    {
        return view('admin.kategori.data_kategoritambah');
    }

    public function proses_tambah_kategori(Request $request)
    {

        if ($request->id) {
            $kategori = kategori::findOrFail($request->id);
            $kategori->name_222142 =  $request->name;
            $kategori->deksripsi_222142 =  $request->deksripsi;
            $kategori->harga_222142 =  $request->harga;
            if ($request->hasFile('foto')) {
                $originalName = $request->file('foto')->getClientOriginalName();
                $uniqueName = time() . '_' . $originalName;
                $request->file('foto')->move(public_path('images'), $uniqueName);
                $kategori->foto_222142 =  $uniqueName;
            }
            $kategori->save();
            return redirect()->route('admin_kategori')->with('Success', 'berhasil diupdate');
        }

        $kategori = new kategori();
        $kategori->name_222142 =  $request->name;
        $kategori->deksripsi_222142 =  $request->deksripsi;
        $kategori->harga_222142 =  $request->harga;
        if ($request->hasFile('foto')) {
            $originalName = $request->file('foto')->getClientOriginalName();
            $uniqueName = time() . '_' . $originalName;
            $request->file('foto')->move(public_path('images'), $uniqueName);
            $kategori->foto_222142 =  $uniqueName;
        }
        // dd($kategori);
        $kategori->save();
        return redirect()->route('admin_kategori')->with('Success', 'berhasil ditambahkan');
    }

    public function edit_kategori($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('admin.kategori.data_kategoritambah', compact('kategori'));
    }

    public function hapus_kategori($id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('admin_kategori')->with('Success', 'berhasil dihapus');
    }






    // lapangan
    public function lapangan()
    {
        $data = lapangan::all();
        $kategori = kategori::all();
        return view('admin.lapangan.data_lapangan', compact('data', 'kategori'));
    }

    public function tambah_lapangan()
    {
        $kategori = kategori::all();
        return view('admin.lapangan.data_lapangantambah', compact('kategori'));
    }

    public function proses_tambah_lapangan(Request $request)
    {

        if ($request->id) {
            $lapangan = lapangan::findOrFail($request->id);
            $lapangan->urutan_222142 =  $request->urutan;
            $lapangan->deskripsi_222142 =  $request->deskripsi;
            $lapangan->is_active_222142 =  $request->status;
            $lapangan->id_kategori =  $request->id_kategori;
            $lapangan->save();
            return redirect()->route('admin_lapangan')->with('Success', 'berhasil diupdate');
        }

        $request->validate(
            [
                'urutan' => 'required',
                'deskripsi' => 'required',
                'status' => 'required',
                'id_kategori' => 'required'
            ]
        );
        $lapangan = new lapangan();
        $lapangan->urutan_222142 =  $request->urutan;
        $lapangan->deskripsi_222142 =  $request->deskripsi;
        $lapangan->is_active_222142 =  $request->status;
        $lapangan->id_kategori =  $request->id_kategori;
        $lapangan->save();
        return redirect()->route('admin_lapangan')->with('Success', 'berhasil ditambahkan');
    }

    public function edit_lapangan($id)
    {
        $kategori = kategori::all();
        $lapangan = lapangan::findOrFail($id);
        return view('admin.lapangan.data_lapangantambah', compact('lapangan', 'kategori'));
    }

    public function hapus_lapangan($id)
    {
        $lapangan = lapangan::findOrFail($id);
        $lapangan->delete();
        return redirect()->route('admin_lapangan')->with('Success', 'berhasil dihapus');
    }





    // operasional
    public function operasional()
    {
        $operasional = operasional::first();
        return view('admin.operasional.data_operasional', compact('operasional'));
    }

    public function edit_operasional($id)
    {

        $operasional = operasional::findOrFail($id);
        return view('admin.operasional.data_operasionaltambah', compact('operasional'));
    }

    public function proses_tambah_operasional(Request $request)
    {

        if ($request->id) {
            $operasional = operasional::findOrFail($request->id);
            $operasional->jam_buka_222142 =  $request->buka;
            $operasional->jam_tutup_222142 =  $request->tutup;
            $operasional->save();
            return redirect()->route('admin_operasional')->with('Success', 'berhasil diupdate');
        }
    }






    // booking
    public function booking(Request $request)
    {
        $user = User::all();
        $lapangan = lapangan::all();
        $bookings = collect();
        $kategori = kategori::all();

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
            // dd($month);
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

        return view('admin.booking.data_booking', compact('bookings', 'user', 'lapangan','kategori'));
    }
    public function tambah_booking()
    {
        $user = User::where('level', 'user')->get();
        $kategori = kategori::all();
        $lapangan = lapangan::all();
        return view('admin.booking.data_bookingtambah', compact('kategori', 'user', 'lapangan'));
    }

    public function proses_tambah_booking(Request $request)
    {

        if ($request->id) {
            $id = $request->id;
            $id_user =  $request->id_user;
            $id_lapangan =  $request->id_lapangan;
            $tgl_booking =  $request->tgl_booking;
            return redirect()->route('admin_pilihjam', compact('id', 'id_user', 'id_lapangan', 'tgl_booking'))->with('Success', 'berhasil diupdate');
        }

        $request->validate(
            [
                'id_user' => 'required',
                'id_lapangan' => 'required',
                'tgl_booking' => 'required',
            ]
        );
        $id_user =  $request->id_user;
        $id_lapangan =  $request->id_lapangan;
        $tgl_booking =  $request->tgl_booking;

        return redirect()->route('admin_pilihjam', [
            'user' => $id_user,
            'lapangan' => $id_lapangan,
            'tgl' => $tgl_booking,
        ]);
    }

    public function pilihjam($id_user, $id_lapangan, $tgl_booking)
    {
        $jam = booking::where('id_lapangan', $id_lapangan)
            ->where('tgl_booking_222142', $tgl_booking)
            ->get();

        $operasional = operasional::first();
        if (!$operasional) {
            return redirect()->back()->with('error', 'Data operasional tidak ditemukan');
        }

        // Ambil data user
        $user = User::find($id_user);
        if (!$user) {
            return redirect()->back()->with('error', 'Data pengguna tidak ditemukan');
        }

        // Ambil data lapangan
        $lapangan = lapangan::find($id_lapangan);
        if (!$lapangan) {
            return redirect()->back()->with('error', 'Data lapangan tidak ditemukan');
        }

        // Ambil data kategori untuk lapangan
        $kategori = kategori::find($lapangan->id_kategori);

        // Extract booked times
        $bookedTimes = $jam->flatMap(function ($booking) {
            return [$booking->jam_mulai_222142, $booking->jam_selesai_222142];
        })->unique()->toArray();

        return view('admin.booking.data_bookingjam', compact(
            'id_user',
            'operasional',
            'id_lapangan',
            'tgl_booking',
            'jam',
            'bookedTimes',
            'user',
            'lapangan',
            'kategori'
        ));
    }


    public function simpan_booking(Request $request)
    {
        $request->validate([
            'selected_times' => 'required|string', // Validasi bahwa jam terpilih harus ada
        ]);


        $lapangan = lapangan::where('id', $request->id_lapangan)->first();
        $kategori = Kategori::where('id', $lapangan->id_kategori)->first();
        $tgl = $request->tgl_booking;

        $selectedTimes = explode(',', $request->selected_times);
        sort($selectedTimes);

        if (count($selectedTimes) < 1) {
            return redirect()->back()->withErrors(['error' => 'Harap pilih setidaknya satu jam']);
        }

        $mulai = \Carbon\Carbon::createFromFormat('H:i', $selectedTimes[0]);
        $selesai = \Carbon\Carbon::createFromFormat('H:i', end($selectedTimes))->addHour(); // Tambah 1 jam ke waktu terakhir
        $totalJam = $selesai->diffInHours($mulai);
        $totalHarga = $totalJam * $kategori->harga_222142;



        $booking = new booking();
        $booking->id_user =  $request->id_user;
        $booking->id_lapangan =  $request->id_lapangan;
        $booking->tgl_booking_222142 =  $tgl;
        $booking->jam_mulai_222142 =  $mulai;
        $booking->jam_selesai_222142 =  $selesai;
        $booking->total_222142 = $totalHarga;
        $booking->status_222142 = 'proses';
        $booking->save();
        return redirect()->route('admin_booking')->with('Success', 'berhasil diupdate');
    }
    public function hapus_booking($id)
    {
        $lapangan = booking::findOrFail($id);
        $lapangan->delete();
        return redirect()->route('admin_booking')->with('Success', 'berhasil dihapus');
    }






    // konfirmasi
    public function konfirmasi()
    {
        $user = User::all();
        $data = konfirmasi::all();
        $booking = booking::all();
        return view('admin.konfirmasi.data_konfirmasi', compact('data', 'user', 'booking'));
    }

    public function tambah_konfirmasi()
    {
        $user = User::all();
        $booking = booking::where('status_222142', 'proses')->get();
        return view('admin.konfirmasi.data_konfirmasitambah', compact('booking', 'user'));
    }

    public function proses_tambah_konfirmasi(Request $request)
    {

        if ($request->id) {
            $konfirmasi = konfirmasi::findOrFail($request->id);
            $konfirmasi->id_booking =  $request->id_booking;
            if ($request->hasFile('foto')) {
                $originalName = $request->file('foto')->getClientOriginalName();
                $uniqueName = time() . '_' . $originalName;
                $request->file('foto')->move(public_path('images'), $uniqueName);
                $konfirmasi->foto_222142 =  $uniqueName;
            }

            $konfirmasi->save();
            return redirect()->route('admin_konfirmasi')->with('Success', 'berhasil diupdate');
        }

        $konfirmasi = new konfirmasi();
        $konfirmasi->id_booking =  $request->id_booking;
        if ($request->hasFile('foto')) {
            $originalName = $request->file('foto')->getClientOriginalName();
            $uniqueName = time() . '_' . $originalName;
            $request->file('foto')->move(public_path('images'), $uniqueName);
            $konfirmasi->foto_222142 =  $uniqueName;
        }
        //
        $konfirmasi->save();
        return redirect()->route('admin_konfirmasi')->with('Success', 'berhasil ditambahkan');
    }

    public function edit_konfirmasi($id)
    {
        $user = User::all();
        $booking = booking::where('status', 'proses')->get();
        $konfirmasi = konfirmasi::findOrFail($id);
        return view('admin.konfirmasi.data_konfirmasitambah', compact('konfirmasi', 'user', 'booking'));
    }

    public function hapus_konfirmasi($id)
    {
        $konfirmasi = konfirmasi::findOrFail($id);
        $konfirmasi->delete();
        return redirect()->route('admin_konfirmasi')->with('Success', 'berhasil dihapus');
    }
    public function terima_konfirmasi($id)
    {
        $konfirmasi = konfirmasi::findOrFail($id);
        $booking = booking::findOrFail($konfirmasi->id_booking);
        $booking->status_222142 = 'aktif';
        $booking->save();
        $konfirmasi->delete();
        return redirect()->route('admin_konfirmasi')->with('Success', 'berhasil dihapus');
    }

    public function tolak_konfirmasi($id)
    {
        $konfirmasi = konfirmasi::findOrFail($id);
        $booking = booking::findOrFail($konfirmasi->id_booking);
        $booking->status_222142 = 'tidak aktif';
        $booking->save();
        $konfirmasi->delete();
        return redirect()->route('admin_konfirmasi')->with('Success', 'berhasil dihapus');
    }
}
