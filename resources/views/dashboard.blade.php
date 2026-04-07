<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-2xl font-semibold text-slate-100">Dashboard</h2>
                <p class="mt-1 text-sm text-slate-400">Ringkasan proyek dan performa .</p>
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-slate-950 text-slate-100">
        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid gap-6 xl:grid-cols-[280px_1fr]">
                <aside class="rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-2xl shadow-slate-950/40">
                    <div class="mb-8">
                        <div class="text-xs font-semibold uppercase tracking-[0.25em] text-sky-300/80"></div>
                        <h1 class="mt-3 text-3xl font-semibold text-white">Dashboard</h1>
                        <p class="mt-3 text-sm leading-6 text-slate-400">Kontrol penuh atas data proyek dan aktivitas terbaru.</p>
                    </div>

                    <nav class="space-y-2">
                        <a href="{{ route('dashboard') }}" class="block rounded-2xl border border-slate-800 bg-slate-950 px-4 py-3 text-sm font-medium text-sky-200 transition hover:bg-slate-900/90 hover:text-white">Overview</a>
                        <a href="{{ route('project.index') }}" class="block rounded-2xl border border-slate-800 bg-slate-950 px-4 py-3 text-sm font-medium text-slate-200 transition hover:bg-slate-900/90 hover:text-white">Projects</a>
                    </nav>

                    <div class="mt-8 rounded-[1.75rem] border border-slate-800 bg-slate-950/90 p-5">
                        <div class="flex items-center justify-between text-sm text-slate-400">
                            <span>Today</span>
                            <span class="text-sky-300">Live</span>
                        </div>
                        <div class="mt-4 text-3xl font-semibold text-white">72<span class="text-slate-400 text-base font-medium">%</span></div>
                        <p class="mt-2 text-sm text-slate-500">Kinerja server dan aktivitas pengguna stabil.</p>
                    </div>
                </aside>

                <main class="space-y-6">
                    <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
                        <article class="rounded-[1.75rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/10">
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Projects</p>
                            <div class="mt-5 flex items-end justify-between gap-4">
                                <div>
                                    <p class="text-4xl font-semibold text-white">{{ $projectCount ?? 0 }}</p>
                                    <p class="mt-2 text-sm text-slate-400">Total proyek aktif</p>
                                </div>
                                <div class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-sky-500/10 text-sky-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
                                    </svg>
                                </div>
                            </div>
                        </article>

                        <article class="rounded-[1.75rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/10">
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Users</p>
                            <div class="mt-5 flex items-end justify-between gap-4">
                                <div>
                                    <p class="text-4xl font-semibold text-white">{{ $userCount ?? 0 }}</p>
                                    <p class="mt-2 text-sm text-slate-400">Total users terdaftar</p>
                                </div>
                                <div class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-sky-500/10 text-sky-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m5-4a4 4 0 11-8 0 4 4 0 018 0zm4 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                            </div>
                        </article>

                        <article class="rounded-[1.75rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/10">
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Admin Activities</p>
                            <div class="mt-5 flex items-end justify-between gap-4">
                                <div>
                                    <p class="text-4xl font-semibold text-white">{{ $adminActivityCount ?? 0 }}</p>
                                    <p class="mt-2 text-sm text-slate-400">Total aktivitas admin</p>
                                </div>
                                <div class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-sky-500/10 text-sky-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 1.343-3 3 0 1.933 2.074 4.643 2.461 5.143a1 1 0 001.078 0C13.926 15.643 16 12.933 16 11c0-1.657-1.343-3-3-3z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v4m0 8v4" />
                                    </svg>
                                </div>
                            </div>
                        </article>

                        <article class="rounded-[1.75rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/10">
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-500">New Projects</p>
                            <div class="mt-5 flex items-end justify-between gap-4">
                                <div>
                                    <p class="text-4xl font-semibold text-white">{{ $latestProjects->count() ?? 0 }}</p>
                                    <p class="mt-2 text-sm text-slate-400">Proyek terbaru</p>
                                </div>
                                <div class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-sky-500/10 text-sky-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 5.5a7 7 0 017 7v1.5a2 2 0 01-2 2H7a2 2 0 01-2-2V12.5a7 7 0 017-7z" />
                                    </svg>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="grid gap-6 xl:grid-cols-[1.3fr_1fr]">
                        <section class="rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/10">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Admin Changes</p>
                                    <h2 class="mt-2 text-2xl font-semibold text-white">Recent Perubahan</h2>
                                </div>
                                <button class="rounded-2xl bg-sky-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-sky-400">Update</button>
                            </div>

                            <div class="mt-6 space-y-3">
                                @forelse($latestProjects->take(3) ?? [] as $project)
                                    <div class="rounded-3xl border border-slate-800 bg-slate-950/80 p-4 hover:border-sky-500/40 transition">
                                        <div class="text-sm text-slate-400">Project dibuat</div>
                                        <h3 class="text-lg font-semibold text-white mt-1">{{ $project->title }}</h3>
                                        <p class="text-xs text-slate-500">{{ $project->created_at->diffForHumans() }}</p>
                                    </div>
                                @empty
                                    <div class="rounded-3xl border border-dashed border-slate-700 bg-slate-950/70 p-6 text-center text-slate-500">
                                        Tidak ada perubahan terbaru.
                                    </div>
                                @endforelse
                            </div>
                        </section>

                        <section class="rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/10">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Latest Projects</p>
                                    <h2 class="mt-2 text-2xl font-semibold text-white">Recent Additions</h2>
                                </div>
                                <span class="rounded-2xl bg-slate-950/80 px-3 py-2 text-xs uppercase tracking-[0.2em] text-slate-400">Top 5</span>
                            </div>

                            <div class="mt-6 space-y-3">
                                @forelse($latestProjects ?? [] as $project)
                                    <div class="rounded-3xl border border-slate-800 bg-slate-950/80 p-4 hover:border-sky-500/40 transition">
                                        <div class="flex items-center justify-between gap-4">
                                            <div>
                                                <h3 class="text-lg font-semibold text-white">{{ $project->title }}</h3>
                                                <p class="mt-1 text-sm text-slate-400 truncate">{{ Str::limit($project->description, 80) }}</p>
                                            </div>
                                            <span class="text-xs uppercase tracking-[0.3em] text-slate-500">{{ $project->created_at->format('M d') }}</span>
                                        </div>
                                    </div>
                                @empty
                                    <div class="rounded-3xl border border-dashed border-slate-700 bg-slate-950/70 p-6 text-center text-slate-500">
                                        Tidak ada proyek terbaru ditemukan.
                                    </div>
                                @endforelse
                            </div>
                        </section>
                    </div>

                    <section class="rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/10">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Perubahan Admin Detail</p>
                                <h2 class="mt-2 text-2xl font-semibold text-white">Riwayat Aktivitas Lengkap</h2>
                            </div>
                            <button class="rounded-2xl bg-slate-800/80 px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-700">Export report</button>
                        </div>

                        <div class="mt-6 grid gap-4 md:grid-cols-3">
                            <div class="rounded-3xl border border-slate-800 bg-slate-950/80 p-5">
                                <p class="text-sm text-slate-400">Projects Dibuat</p>
                                <p class="mt-4 text-3xl font-semibold text-white">{{ $projectCount ?? 0 }}</p>
                            </div>
                            <div class="rounded-3xl border border-slate-800 bg-slate-950/80 p-5">
                                <p class="text-sm text-slate-400">Users Ditambahkan</p>
                                <p class="mt-4 text-3xl font-semibold text-white">{{ $userCount ?? 0 }}</p>
                            </div>
                            <div class="rounded-3xl border border-slate-800 bg-slate-950/80 p-5">
                                <p class="text-sm text-slate-400">Aktivitas Terbaru</p>
                                <p class="mt-4 text-3xl font-semibold text-white">{{ $latestProjects->count() ?? 0 }}</p>
                            </div>
                        </div>

                        <div class="mt-6 space-y-3">
                            @forelse($latestProjects ?? [] as $project)
                                <div class="rounded-3xl border border-slate-800 bg-slate-950/80 p-4 hover:border-sky-500/40 transition">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <h3 class="font-semibold text-white">{{ $project->title }}</h3>
                                            <p class="text-sm text-slate-400">{{ Str::limit($project->description, 60) }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-xs text-slate-500">Dibuat: {{ $project->created_at->format('d M Y') }}</p>
                                            <p class="text-xs text-slate-400">Updated: {{ $project->updated_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="rounded-3xl border-dashed border-slate-700 bg-slate-950/70 p-8 text-center text-slate-500">
                                    Tidak ada aktivitas admin.
                                </div>
                            @endforelse
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
