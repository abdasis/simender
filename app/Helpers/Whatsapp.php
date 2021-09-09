<?php



function kirimNotif ($nomor, $message){
    return \Http::withHeaders([
        'Authorization' => '7f7okJISNmplDdGKCbpUsmkkCWDZwTR8VkdSA1xRJuZOGKt4WFyTgt0dm2v5h2l9'
    ])->post('https://cepogo.wablas.com/api/send-message',[
        'phone' => $nomor,
        'message' => $message,
        'secret' => false,
        'prioritas' => false,
    ]);
}
