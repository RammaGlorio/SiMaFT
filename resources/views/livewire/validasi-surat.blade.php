<div>
    <div class="flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen">
        <div class="relative max-w-xl p-8 text-gray-800 bg-white shadow-xl lg:max-w-3xl rounded-3xl min-w-[200px]">
            
            @if(!$detailSurat)
                <div class="flex mb-3 justify-center">
                    <img width ="60px" src="{{asset ('asset/img/close-red-icon.png')}}">
                </div>
                <h3 class="text-2xl">Data surat tidak ditemukan.</h3>
            @else
                <div class="absolute top-0 right-0 m-3 flex justify-center">
                    <img width ="60px" src="{{asset ('asset/img/verified-symbol-icon.png')}}">
                </div>
                <h3 class="text-2xl">Informasi Surat</h3>
                <p class="">Pastikan beberapa isi surat yang ada sama dengan detail dibawah ini:</p>
                <div class="mt-4">
                    <div class="flex flex-col">
                        <div class="-m-1.5 ">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="border rounded-lg shadow dark:border-gray-700 dark:shadow-gray-900">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">Nama</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $detailSurat->nama_mhs ? $detailSurat->nama_mhs : "-" }}</td>
                                </tr>
                    
                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">NIM</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $detailSurat->nim ? $detailSurat->nim : "-" }}</td>
                                </tr>
                    
                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">No Surat</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $detailSurat->nomor_surat ? $detailSurat->nomor_surat : "-" }}</td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">Jenis</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $detailSurat->jenis_surat ? $detailSurat->jenis_surat : "-" }}</td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">Jurusan/Prodi</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $detailSurat->jurusan_prodi ? $detailSurat->jurusan_prodi : "-" }}</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php
                        $url = url()->current();
                    ?>
                    <br>
                    <div class="text-center">
                        <a href="{{$url}}" class="text-blue-600 underline">{{$url}}</a>
                    </div>
                </div>
            @endif
            
        </div>
    </div>
</div>