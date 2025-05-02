<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Part;

class ChapterController extends Controller
{
    public function completeCourse(Request $request, $id_course)
    {
        $data = $request->validate([
            'chapters' => 'required|array',
            'chapters.*.title' => 'required|string|max:255',
            'chapters.*.parts' => 'required|array',
            'chapters.*.parts.*.title' => 'required|string|max:255',
            'chapters.*.parts.*.content' => 'required|string',
        ]);

        foreach ($data['chapters'] as $chapterIndex => $chapterData) {
            $chapter = Chapter::create([
                'title' => $chapterData['title'],
                'order' => $chapterIndex + 1,
                'id_course' => $id_course,
            ]);

            foreach ($chapterData['parts'] as $partIndex => $partData) {
                Part::create([
                    'title' => $partData['title'],
                    'content' => $partData['content'],
                    'order' => $partIndex + 1,
                    'id_chapter' => $chapter->id,
                ]);
            }
        }

        return redirect()->route('teacher.courses')->with('success', 'Course completed successfully.');
    }
}
