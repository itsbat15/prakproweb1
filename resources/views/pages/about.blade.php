@extends('layouts.main')

@section('title', 'About - Mahasiswa Sistem Informasi ITK')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h1>Tentang Saya</h1>
        <p>Saya adalah mahasiswa Sistem Informasi di Institut Teknologi Kalimantan yang memiliki minat dalam dunia teknologi, khususnya dalam memahami bagaimana sistem informasi bekerja dan diterapkan di berbagai bidang.</p>
    </div>
    <div class="accordion mt-4" id="aboutAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#visiMisi">
                    🎯 Visi dan Misi
                </button>
            </h2>
            <div id="visiMisi" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <p>Saya ingin memahami lebih dalam bagaimana teknologi dapat membantu kehidupan sehari-hari dan bagaimana sistem informasi dapat diterapkan secara efektif dalam berbagai bidang.</p>
                    <p><strong>Visi:</strong> Mengembangkan wawasan dan keterampilan dalam teknologi serta berkontribusi dalam dunia digital.</p>
                    <p><strong>Misi:</strong></p>
                    <ul>
                        <li>Terus belajar dan mengembangkan pemahaman dalam sistem informasi.</li>
                        <li>Mengikuti perkembangan teknologi untuk memperluas wawasan.</li>
                        <li>Menerapkan ilmu yang dipelajari dalam kehidupan sehari-hari dan dunia kerja.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#minat">
                    💡 Minat dan Ketertarikan
                </button>
            </h2>
            <div id="minat" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p>Saya memiliki ketertarikan dalam dunia teknologi informasi, terutama dalam memahami bagaimana sistem dapat bekerja dengan baik dan efisien. Saya juga tertarik untuk mengetahui bagaimana data dan informasi dapat diolah untuk menghasilkan wawasan yang bermanfaat.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aktivitas">
                    🎓 Aktivitas Akademik dan Organisasi
                </button>
            </h2>
            <div id="aktivitas" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p>Selama kuliah, saya aktif dalam berbagai kegiatan akademik dan organisasi yang mendukung pengembangan wawasan dan keterampilan.</p>
                    <ul>
                        <li>Mengikuti seminar dan workshop seputar teknologi informasi.</li>
                        <li>Terlibat dalam diskusi dan studi kasus mengenai sistem informasi di dunia nyata.</li>
                        <li>Belajar dari berbagai sumber untuk memahami teknologi yang sedang berkembang.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-5 text-center">
        <h3>✨ Kutipan Motivasi</h3>
        <blockquote class="blockquote">
            <p>"Belajar adalah proses seumur hidup, dan teknologi adalah alat untuk mencapai hal-hal yang lebih besar."</p>
            <footer class="blockquote-footer">[Nama Kamu]</footer>
        </blockquote>
    </div>
</div>
@endsection
