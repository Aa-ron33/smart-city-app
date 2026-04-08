<?php
public function index(Request $request)
{
    $search = $request->search;
    
    $complaints = Complaint::with('user')
        ->when($search, function($q) use ($search) {
            $q->where('judul_aduan', 'like', "%{$search}%")
              ->orWhere('deskripsi', 'like', "%{$search}%");
        })
        ->latest()
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
        'user_id' => Auth::id(),
        'judul_aduan' => $request->judul_aduan,
        'jenis_aduan' => $request->jenis_aduan,
        'deskripsi' => $request->deskripsi,
        'status' => false  // boolean false = pending
    ]);

    return redirect()->route('complaints.index')
        ->with('success', '✅ Aduan berhasil dilaporkan!');
}