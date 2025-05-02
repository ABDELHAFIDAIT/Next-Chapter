<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Part;

class ChapterController extends Controller
{
    public function completeCourse(Request $request, $id_course){
        try {
            $data = $request->validate([
                'chapters' => 'required|array',
                'chapters.*.title' => 'required|string',
                'chapters.*.parts' => 'required|array',
                'chapters.*.parts.*.title' => 'required|string',
                'chapters.*.parts.*.content' => 'required|string',
            ]);
    
            foreach ($data['chapters'] as $index => $chapterData) {
                $chapter = Chapter::create([
                    'title' => $chapterData['title'],
                    'order' => $index + 1,
                    'id_course' => $id_course,
                ]);
    
                foreach ($chapterData['parts'] as $pIndex => $partData) {
                    Part::create([
                        'title' => $partData['title'],
                        'content' => $partData['content'],
                        'order' => $pIndex + 1,
                        'id_chapter' => $chapter->id,
                    ]);
                }
            }
    
            return response()->json(['message' => 'Chapitres enregistrés avec succès !']);
        } catch (\Exception $e) {
            \Log::error('Erreur lors de l\'enregistrement des chapitres', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['message' => 'Erreur serveur'], 500);
        }
    }
}
