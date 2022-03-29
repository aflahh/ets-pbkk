<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulir') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <?php if (session()->get('success')) echo session()->get('success')                    
                     ?>
                    <h2 class="font-semibold text-xl text-center">Formulir Rekam Medis</h2>
                    <form action="/submit" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <label class="block" for="PasienInput">Pasien</label>
                            <select
                                class="block appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                name="PasienInput">
                                <option>Pasien 1</option>
                                <option>Pasien 2</option>
                                <option>Pasien 3</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block" for="DokterInput">Dokter</label>
                            <select
                                class="block appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                name="DokterInput">
                                <option>Dokter 1</option>
                                <option>Dokter 2</option>
                                <option>Dokter 3</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block" for="KondisiInput">Kondisi Kesehatan Pasien</label>
                            <input
                                class="block appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                name="KondisiInput" type="text" placeholder="Kondisi Kesehatan">
                            @error('KondisiInput')
                                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 p-2 text-red-700">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block" for="SuhuInput">Suhu Tubuh Pasien</label>
                            <input
                                class="block appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                name="SuhuInput" type="text" placeholder="Suhu Tubuh">
                            @error('SuhuInput')
                                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 p-2 text-red-700">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block" for="ResepInput">Resep Obat</label>
                            <input name="ResepInput" type="file">
                            @error('ResepInput')
                                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 p-2 text-red-700">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="bg-gray-800 text-white font-bold py-2 px-4 rounded">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
