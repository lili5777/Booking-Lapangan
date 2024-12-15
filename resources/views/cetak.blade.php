<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Booking</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 20mm;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 24px;
            margin-top: 10px;
        }

        p {
            text-align: center;
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        table {
            width: 95%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #0984e3;
            color: #ffffff;
        }

        thead th {
            padding: 12px 10px;
            font-size: 14px;
            text-align: center;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        tbody td {
            padding: 10px;
            font-size: 12px;
            text-align: center;
            color: #34495e;
            border: 1px solid #f0f0f0;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #dfe6e9;
        }

        tfoot td {
            padding: 10px;
            font-size: 13px;
            font-weight: bold;
            background-color: #0984e3;
            color: #ffffff;
            text-align: right;
        }

        .no-data {
            text-align: center;
            font-style: italic;
            color: #999;
            font-size: 14px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #b2bec3;
        }
    </style>
</head>

<body>
    <h1>Laporan Data Booking</h1>
    <p>Filter: {{ $judul }}</p>

    @php
        $totalHarga = [
            'proses' => 0,
            'aktif' => 0,
            'tidak aktif' => 0,
        ];
    @endphp

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tgl Booking</th>
                <th>Lapangan</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Status</th>
                <th>Total Jam</th>
                <th>Harga Perjam</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $index => $booking)
                @php
                    $jam_mulai = \Carbon\Carbon::parse($booking->tgl_booking_222142 . ' ' . $booking->jam_mulai_222142);
                    $jam_selesai = \Carbon\Carbon::parse(
                        $booking->tgl_booking_222142 . ' ' . $booking->jam_selesai_222142,
                    );
                    $durasi = $jam_mulai->diff($jam_selesai);
                    $jam = $durasi->h + $durasi->i / 60;

                    $lapangan_saat_ini = $lapangan->where('id', $booking->id_lapangan)->first();
                    $kategori_saat_ini = $kategori->where('id', $lapangan_saat_ini->id_kategori)->first();
                    $harga_perjam = $kategori_saat_ini->harga_222142;

                    $total = $booking->total_222142;

                    $status = strtolower($booking->status_222142);
                    if (isset($totalHarga[$status])) {
                        $totalHarga[$status] += $total;
                    }
                @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->where('id', $booking->id_user)->first()->name }}</td>
                    <td>{{ $booking->tgl_booking_222142 }}</td>
                    <td>{{ $lapangan_saat_ini->urutan_222142 }}</td>
                    <td>{{ $booking->jam_mulai_222142 }}</td>
                    <td>{{ $booking->jam_selesai_222142 }}</td>
                    <td>{{ ucfirst($booking->status_222142) }}</td>
                    <td>{{ number_format($jam) }} jam</td>
                    <td>Rp {{ number_format($harga_perjam, 0) }}</td>
                    <td>Rp {{ number_format($total, 0) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="no-data">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">Total Harga Diproses:</td>
                <td>Rp {{ number_format($totalHarga['proses'], 0) }}</td>
            </tr>
            <tr>
                <td colspan="9">Total Harga Aktif:</td>
                <td>Rp {{ number_format($totalHarga['aktif'], 0) }}</td>
            </tr>
            <tr>
                <td colspan="9">Total Harga Tidak Aktif:</td>
                <td>Rp {{ number_format($totalHarga['tidak aktif'], 0) }}</td>
            </tr>
            <tr>
                <td colspan="9">Total Keseluruhan:</td>
                <td>Rp {{ number_format(array_sum($totalHarga), 0) }}</td>
            </tr>
        </tfoot>
    </table>

    <footer>
        Laporan ini dihasilkan secara otomatis pada {{ now()->format('d-m-Y H:i:s') }}
    </footer>
</body>

</html>
