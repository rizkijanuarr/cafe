<?php


/**
     * IMAGE CAST
     * TODO
     * use Illuminate\Database\Eloquent\Casts\Attribute;
     * Pastikan kode diatas sudah di import!
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => url('/storage/posts/' . $value),
        );
    }
