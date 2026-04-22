@extends('layouts.admin')
@section('content')
<!-- Latest Sales Table -->
<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-8 border-b flex justify-between items-center">
                <h3 class="font-black text-xl">Transaksi Terakhir</h3>
                <a href="admin-transactions.html" class="text-indigo-600 font-bold hover:underline">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <tr>
                            <th class="px-8 py-4">Pembeli</th>
                            <th class="px-8 py-4">Event</th>
                            <th class="px-8 py-4">Status</th>
                            <th class="px-8 py-4">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-t">
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Donni Prabowo</p>
                                <p class="text-xs text-slate-400">donni@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">Jazz Night 2024</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase">Success</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 155.000</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Maya Sari</p>
                                <p class="text-xs text-slate-400">maya@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">AI & Future Workshop</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-lg text-xs font-bold uppercase">Pending</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 55.000</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Budi Santoso</p>
                                <p class="text-xs text-slate-400">budi@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">Hackathon 2024</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold uppercase">Free</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endsection