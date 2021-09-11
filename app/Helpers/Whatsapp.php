<?php



function kirimNotif ($nomor, $message){

    $dataWhatsapp = \App\Models\Whatsapp::first();
    if (empty($dataWhatsapp)){
       session()->flash('whatsappError', 'Notifikasi tidak terkirim karna pengaturan whatsapp belum di set');
       return false;
    }else{
        $token = $dataWhatsapp->token;
        $url = $dataWhatsapp->domain;
    }

    return \Http::withHeaders([
        'Authorization' => $token
    ])->post($url . '/api/send-message',[
        'phone' => $nomor,
        'message' => $message,
        'secret' => false,
        'prioritas' => false,
    ]);
}

function buatPengingat($telepon, $pesan, $tanggal, $waktu){

    $dataWhatsapp = \App\Models\Whatsapp::first();
    if (empty($dataWhatsapp)){
        session()->flash('whatsappError', 'Notifikasi tidak terkirim karna pengaturan whatsapp belum di set');
        return false;
    }else{
        $token = $dataWhatsapp->token;
        $url = $dataWhatsapp->domain;
    }

    return \Http::withHeaders([
        'Authorization' => $token
    ])->post($url . '/api/schedule',[
        'phone' => $telepon,
        'message' => $pesan,
        'date' => $tanggal,
        'time' => $waktu,
    ]);
}
