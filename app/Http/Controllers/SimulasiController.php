<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Simulasi\User;
use App\Models\Simulasi\Menu;
use App\Models\Simulasi\Pesanan;

class SimulasiController extends Controller
{
    public function index()
    {
        // Simulasi login hard‑code
        $user = new User("user@example.com", "1234");

        if ($user->login()) {
            $menu    = new Menu("Nasi Goreng", 15000);
            $pesanan = new Pesanan($menu, 2);
            $total   = $pesanan->hitungTotal();

            return "Total Harga: " . $total;
        }

        return "Login gagal";
    }
}
