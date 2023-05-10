<?php

namespace App\Observers;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        $blog->slug = Str::slug($blog->title);
        $blog->published_at = date('Y-m-d');
        $blog->author_by = Auth::id();
        $blog->save();
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Blog $blog): void
    {
        //
    }
}
