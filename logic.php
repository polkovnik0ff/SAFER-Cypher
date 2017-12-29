<?php

    # --- ШИФРОВАНИЕ ---

    # ключ должен представлять собой случайную бинарную строку.
    # Для преобразовангия строки в ключ используйте scrypt, bcrypt или PBKDF2
    # Ключ задается в виде строки шестнадцатеричных чисел
    $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc");
    
    //var_dump(strlen("bcb04b7e103a0cd8b54763051cef08bc"));

    # Показываем длину ключа. 
    # Длина ключа должна быть 16, 24 или 32 байт для AES-128, 192 и 256 соответственно
    $key_size =  strlen($key);
    //echo "Длина ключа: " . $key_size . "<br>";
    
    $plaintext = "This string was SAFER / CBC encrypted.";
    
    # Создаем шифрованный текст совместимыс с AES (размер блока = 128)
    # Подходит только для строк не заканчивающихся на 00h
    # (потому как это символ дополнения по умолчанию)
    $ciphertext = mcrypt_encrypt(MCRYPT_SAFERPLUS, $key,
                                 $plaintext, MCRYPT_MODE_ECB);

    // var_dump ($ciphertext);

    # Добавляем инициализирующий вектор в начало, чтобы он был доступен для расшифровки
    $ciphertext = $ciphertext;
    
    # перекодируем зашифрованный текст в base64
    $ciphertext_base64 = base64_encode($ciphertext);

    //echo  $ciphertext_base64 . "<br>";

    # === ВНИМАНИЕ ===

    # Результирующий шифрованный текст не имеет целостности или аутентичности и не
    # защищен от атак padding oracle.
    
    # --- ДЕШИФРОВКА ---
    
    $ciphertext_dec = base64_decode($ciphertext_base64);

    $plaintext_dec = mcrypt_decrypt(MCRYPT_SAFERPLUS, $key, $ciphertext_dec, MCRYPT_MODE_ECB);
    
    //echo  $plaintext_dec . "<br>";

?>