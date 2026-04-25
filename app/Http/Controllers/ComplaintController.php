<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{   

    public function index(Request $request)
    {
    $search = $request->search;
    
    $complaints = Complaint::with('user')
        ->when($search, function($q) use ($search) {
            $q->where('judul_aduan', 'like', "%{$search}%")
              ->orWhere('deskripsi', 'like', "%{$search}%");
        })
        ->oldest()
        ->paginate(10);
        
    return view('complaints.index', compact('complaints', 'search'));
    }

    public function create()
    {
    return view('complaints.create');   
    }

    public function store(Request $request)
    {
    $request->validate([
        'judul_aduan' => 'required|max:255',
        'jenis_aduan' => 'required',
        'deskripsi' => 'required|min:10'
    ]);

    Complaint::create([
        'user_id' => 1,        
        'judul_aduan' => $request->judul_aduan,
        'jenis_aduan' => $request->jenis_aduan,
        'deskripsi' => $request->deskripsi,
        'status' => false  // boolean false = pending
    ]);
    

    return redirect()->route('complaints.index')
    ->with('success', '✅ Aduan berhasil dilaporkan!');   
    }

  public function show(string $id)
    {
    $complaint = Complaint::findOrFail($id);
    return view('complaints.show', compact('complaint'));
    }
    public function edit(string $id)
{
    $complaint = Complaint::findOrFail($id);
    return view('complaints.edit', compact('complaint'));
}

public function update(Request $request, string $id)
{
    $request->validate([
        'judul_aduan' => 'required|max:255',
        'jenis_aduan' => 'required',
        'deskripsi'   => 'required|min:10'
    ]);
    
    $complaint = Complaint::findOrFail($id);
    $complaint->update([
        'judul_aduan' => $request->judul_aduan,
        'jenis_aduan' => $request->jenis_aduan,
        'deskripsi'   => $request->deskripsi,
    ]);
    
    return redirect()->route('complaints.index')
        ->with('success', '✅ Pengaduan berhasil diupdate!');
}

public function destroy(string $id)
{
    $complaint = Complaint::findOrFail($id);
    $complaint->delete();
    
    return redirect()->route('complaints.index')
        ->with('success', '✅ Pengaduan berhasil dihapus!');
}
}