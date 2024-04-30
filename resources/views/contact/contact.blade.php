@extends('template.layout')

@section('content')
    <div class="container" style="min-height: calc(100vh - 100px);"> <!-- Atur tinggi minimum agar konten tidak tumpang tindih dengan footer -->
        <h2>Hubungi Kami</h2>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 20px;">
                <h3>Foto Cafe</h3>
                <img src="{{ asset('aloha.jpg') }}" alt="Cafe Kami" style="width: 250%; max-width: 600px;">
                <p>Alamat: Jl. Binawan VII No.1, Limbangansari, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43211</p>
        <p>Email: AlohaChillandDine@gmail.com</p>
        <p>Telepon: 123-456-789</p>
            </div>

            <div style="flex: 1;">
                <h3>Peta Lokasi Cafe</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31692.600039605462!2d107.08619607431642!3d-6.821430099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6853c97ff2fc13%3A0x1ec7e7c58587c3e1!2sAloha%20Chill%20and%20Dine!5e0!3m2!1sid!2sid!4v1713843214598!5m2!1sid!2sid" width="100%" height="450" style="border:0; max-width: 600px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div>
            <h3>Form Pertanyaan</h3>
            <form action="{{ route('pertanyaan.submit') }}" method="post">
                @csrf
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="pertanyaan">Pertanyaan:</label><br>
                <textarea id="pertanyaan" name="pertanyaan" rows="4" required></textarea><br>
                <input type="submit" value="Kirim">
            </form>
        </div>
    </div>
@endsection
