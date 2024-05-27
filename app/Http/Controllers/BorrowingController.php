<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;
use App\Models\Book;
use App\Models\Member;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with('book', 'member')->get();
        return view('borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        $books = Book::all();
        $members = Member::all();
        return view('borrowings.create', compact('books', 'members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'member_id' => 'required|exists:members,id',
            'borrowed_at' => 'required|date',
        ]);

        Borrowing::create($request->all());

        return redirect()->route('borrowings.index');
    }

    public function edit(Borrowing $borrowing)
    {
        $books = Book::all();
        $members = Member::all();

        return view('borrowings.edit', compact('borrowing', 'books', 'members'));
    }

    public function update(Request $request, Borrowing $borrowing)
    {
        $request->validate([
            'returned_at' => 'required|date',
        ]);

        $borrowing->update(['returned_at' => $request->returned_at]);

        return redirect()->route('borrowings.index');
    }
}
