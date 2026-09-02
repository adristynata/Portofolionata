<x-cms-layout>
    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-white">Kelola Proyek</h1>
            <p class="text-slate-400 text-sm mt-1">Tambah, edit, dan hapus karya portofolio Anda.</p>
        </div>
        <button type="button" onclick="document.getElementById('modal-add-project').classList.remove('hidden')" class="px-5 py-2.5 rounded-xl font-bold text-sm text-white bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 transition shadow-lg shadow-blue-500/25 flex items-center gap-2">
            <span>+ Tambah Proyek</span>
        </button>
    </div>

    @if ($errors->any())
        <div class="mb-6 p-4 rounded-2xl bg-rose-500/10 border border-rose-500/30 text-rose-400 text-sm font-semibold space-y-1">
            <div class="font-bold flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                <span>Gagal Menyimpan Proyek:</span>
            </div>
            <ul class="list-disc list-inside text-xs pl-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Project List Table -->
    <div class="bg-[#0b1026] rounded-2xl border border-slate-800/80 overflow-hidden shadow-xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-[#090d21] border-b border-slate-800 text-xs font-bold uppercase tracking-wider text-slate-400">
                    <tr>
                        <th scope="col" class="px-6 py-4">Gambar</th>
                        <th scope="col" class="px-6 py-4">Judul</th>
                        <th scope="col" class="px-6 py-4">Deskripsi</th>
                        <th scope="col" class="px-6 py-4">Link GitHub</th>
                        <th scope="col" class="px-6 py-4">Link Demo</th>
                        <th scope="col" class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/60 text-slate-300">
                    @forelse ($projects as $item)
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="px-6 py-4">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-16 h-12 object-cover rounded-xl border border-slate-800">
                                @else
                                    <div class="w-16 h-12 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-600 font-bold text-xs">
                                        No Image
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-bold text-white whitespace-nowrap">
                                {{ $item->title }}
                            </td>
                            <td class="px-6 py-4 text-xs text-slate-400 max-w-xs truncate">
                                {{ $item->description }}
                            </td>
                            <td class="px-6 py-4 text-xs text-cyan-400 truncate max-w-[150px]">
                                {{ $item->github_link ?? '-' }}
                            </td>
                            <td class="px-6 py-4 text-xs text-purple-400 truncate max-w-[150px]">
                                {{ $item->demo_link ?? '-' }}
                            </td>
                            <td class="px-6 py-4 text-right whitespace-nowrap">
                                <button type="button" onclick="editProject({{ json_encode($item) }})" class="px-3 py-1.5 rounded-lg text-xs font-bold text-cyan-400 bg-cyan-500/10 border border-cyan-500/30 hover:bg-cyan-500/20 transition mr-2">
                                    Edit
                                </button>
                                <form action="{{ route('project.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1.5 rounded-lg text-xs font-bold text-rose-400 bg-rose-500/10 border border-rose-500/30 hover:bg-rose-500/20 transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-slate-500 text-sm font-medium italic">
                                Belum ada proyek. Klik "+ Tambah Proyek" untuk membuat proyek baru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah Proyek -->
    <div id="modal-add-project" class="{{ $errors->any() ? '' : 'hidden' }} fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm p-4 overflow-y-auto">
        <div class="bg-[#0b1026] border border-slate-800 rounded-2xl w-full max-w-lg p-6 shadow-2xl relative">
            <div class="flex items-center justify-between pb-4 border-b border-slate-800 mb-4">
                <h3 class="text-lg font-bold text-white">Tambah Proyek Baru</h3>
                <button type="button" onclick="document.getElementById('modal-add-project').classList.add('hidden')" class="text-slate-400 hover:text-white text-xl leading-none">&times;</button>
            </div>
            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-1">Judul Proyek</label>
                    <input type="text" name="title" value="{{ old('title') }}" required class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500" placeholder="e.g. E-Commerce Tote Bag">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-1">Deskripsi Proyek</label>
                    <textarea name="description" rows="4" required class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500" placeholder="Deskripsi mengenai proyek Anda...">{{ old('description') }}</textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-1">Tautan GitHub (Opsional)</label>
                        <input type="url" name="github_link" value="{{ old('github_link') }}" class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500" placeholder="https://github.com/...">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-1">Tautan Demo (Opsional)</label>
                        <input type="url" name="demo_link" value="{{ old('demo_link') }}" class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500" placeholder="https://demo.com/...">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-1">Gambar Preview Proyek (PNG, JPG, WEBP, maks 5MB)</label>
                    <input type="file" name="image" required accept="image/*" class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-xl text-xs text-slate-300 focus:outline-none file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-cyan-500 file:text-white">
                </div>
                <div class="pt-2 flex justify-end gap-3">
                    <button type="button" onclick="document.getElementById('modal-add-project').classList.add('hidden')" class="px-4 py-2 rounded-xl text-xs font-bold text-slate-400 bg-slate-900 border border-slate-800 hover:text-white">Batal</button>
                    <button type="submit" class="px-5 py-2 rounded-xl text-xs font-bold text-white bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400">Simpan Proyek</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit Proyek -->
    <div id="modal-edit-project" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm p-4 overflow-y-auto">
        <div class="bg-[#0b1026] border border-slate-800 rounded-2xl w-full max-w-lg p-6 shadow-2xl relative">
            <div class="flex items-center justify-between pb-4 border-b border-slate-800 mb-4">
                <h3 class="text-lg font-bold text-white">Edit Proyek</h3>
                <button type="button" onclick="document.getElementById('modal-edit-project').classList.add('hidden')" class="text-slate-400 hover:text-white text-xl leading-none">&times;</button>
            </div>
            <form id="form-edit-project" action="" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-1">Judul Proyek</label>
                    <input type="text" id="edit-title" name="title" required class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-1">Deskripsi Proyek</label>
                    <textarea id="edit-description" name="description" rows="4" required class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-1">Tautan GitHub (Opsional)</label>
                        <input type="url" id="edit-github_link" name="github_link" class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-1">Tautan Demo (Opsional)</label>
                        <input type="url" id="edit-demo_link" name="demo_link" class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-1">Ubah Gambar Preview (Opsional, maks 5MB)</label>
                    <input type="file" name="image" accept="image/*" class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-xl text-xs text-slate-300 focus:outline-none file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-cyan-500 file:text-white">
                </div>
                <div class="pt-2 flex justify-end gap-3">
                    <button type="button" onclick="document.getElementById('modal-edit-project').classList.add('hidden')" class="px-4 py-2 rounded-xl text-xs font-bold text-slate-400 bg-slate-900 border border-slate-800 hover:text-white">Batal</button>
                    <button type="submit" class="px-5 py-2 rounded-xl text-xs font-bold text-white bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400">Update Proyek</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function editProject(project) {
            const form = document.getElementById('form-edit-project');
            form.action = '/dashboard/project/' + project.id;
            document.getElementById('edit-title').value = project.title;
            document.getElementById('edit-description').value = project.description;
            document.getElementById('edit-github_link').value = project.github_link || '';
            document.getElementById('edit-demo_link').value = project.demo_link || '';
            document.getElementById('modal-edit-project').classList.remove('hidden');
        }
    </script>

</x-cms-layout>