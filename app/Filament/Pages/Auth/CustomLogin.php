<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as PagesLogin;
use Filament\Pages\Auth\Login;
use Illuminate\Contracts\Support\Htmlable;

class CustomLogin extends PagesLogin
{
    /**
     * Mengubah Judul Besar (Heading)
     */
    public function getHeading(): string | Htmlable
    {
        return 'HIMASI - Admin Panel';
    }

    /**
     * Mengubah Tulisan di Tombol Login
     */
    public function getFormActions(): array
    {
        return [
            $this->getAuthenticateFormAction()
                ->label('Masuk'),
        ];
    }
}
