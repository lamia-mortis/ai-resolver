<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Contracts\View\View;
use App\Services\PuzzlesGeneralService;
use Illuminate\Http\JsonResponse;

class SudokuController extends Controller
{
    public function index(PuzzlesGeneralService $puzzlesGeneralService): View
    {
        return view('sudoku.index',[
            'puzzles' => $puzzlesGeneralService->getGeneralPuzzlesInfo()
        ]);
    }

    public function solve(Request $request): JsonResponse
    {
        return response()->json(['success' => true, 201]);
    }
}
