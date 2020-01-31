<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // class VerificaSessao {
    //     public static function verificaSessao() {
    //         if (session_status() !== PHP_SESSION_ACTIVE) {
    //             session_start();
    //         }
    //     }
    // }
    // VerificaSessao::verificaSessao();
