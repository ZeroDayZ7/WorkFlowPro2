<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linie języka walidacji
    |--------------------------------------------------------------------------
    |
    | Poniższe linie językowe zawierają domyślne komunikaty błędów używane przez
    | klasę walidatora. Niektóre z tych reguł mają wiele wersji, takich jak
    | reguły rozmiaru. Możesz dowolnie dostosować każdą z tych wiadomości tutaj.
    |
    */

    'accepted' => 'Pole :attribute musi zostać zaakceptowane.',
    'accepted_if' => 'Pole :attribute musi zostać zaakceptowane, gdy :other ma wartość :value.',
    'active_url' => 'Pole :attribute musi być prawidłowym adresem URL.',
    'after' => 'Pole :attribute musi być datą późniejszą niż :date.',
    'after_or_equal' => 'Pole :attribute musi być datą równą lub późniejszą niż :date.',
    'alpha' => 'Pole :attribute może zawierać tylko litery.',
    'alpha_dash' => 'Pole :attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.',
    'alpha_num' => 'Pole :attribute może zawierać tylko litery i cyfry.',
    'array' => 'Pole :attribute musi być tablicą.',
    'ascii' => 'Pole :attribute może zawierać tylko jednobajtowe znaki alfanumeryczne i symbole.',
    'before' => 'Pole :attribute musi być datą wcześniejszą niż :date.',
    'before_or_equal' => 'Pole :attribute musi być datą równą lub wcześniejszą niż :date.',
    'between' => [
        'array' => 'Pole :attribute musi mieć od :min do :max elementów.',
        'file' => 'Pole :attribute musi mieć od :min do :max kilobajtów.',
        'numeric' => 'Pole :attribute musi zawierać się w przedziale od :min do :max.',
        'string' => 'Pole :attribute musi mieć od :min do :max znaków.',
    ],
    'boolean' => 'Pole :attribute musi być prawdą lub fałszem.',
    'can' => 'Pole :attribute zawiera niedozwoloną wartość.',
    'confirmed' => 'Potwierdzenie pola :attribute nie zgadza się.',
    'current_password' => 'Hasło jest nieprawidłowe.',
    'date' => 'Pole :attribute musi być prawidłową datą.',
    'date_equals' => 'Pole :attribute musi być datą równą :date.',
    'date_format' => 'Pole :attribute musi pasować do formatu :format.',
    'decimal' => 'Pole :attribute musi mieć :decimal miejsc dziesiętnych.',
    'declined' => 'Pole :attribute musi zostać odrzucone.',
    'declined_if' => 'Pole :attribute musi zostać odrzucone, gdy :other ma wartość :value.',
    'different' => 'Pole :attribute i :other muszą być różne.',
    'digits' => 'Pole :attribute musi mieć :digits cyfr.',
    'digits_between' => 'Pole :attribute musi mieć od :min do :max cyfr.',
    'dimensions' => 'Pole :attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'doesnt_end_with' => 'Pole :attribute nie może kończyć się jednym z następujących: :values.',
    'doesnt_start_with' => 'Pole :attribute nie może zaczynać się jednym z następujących: :values.',
    'email' => 'Pole :attribute musi być prawidłowym adresem e-mail.',
    'ends_with' => 'Pole :attribute musi kończyć się jednym z następujących: :values.',
    'enum' => 'Wybrany :attribute jest nieprawidłowy.',
    'exists' => 'Wybrany :attribute jest nieprawidłowy.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi mieć wartość.',
    'gt' => [
        'array' => 'Pole :attribute musi mieć więcej niż :value elementów.',
        'file' => 'Pole :attribute musi być większe niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'string' => 'Pole :attribute musi mieć więcej niż :value znaków.',
    ],
    'gte' => [
        'array' => 'Pole :attribute musi mieć :value elementów lub więcej.',
        'file' => 'Pole :attribute musi być większe lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe lub równe :value.',
        'string' => 'Pole :attribute musi mieć co najmniej :value znaków.',
    ],
    'image' => 'Pole :attribute musi być obrazem.',
    'in' => 'Wybrany :attribute jest nieprawidłowy.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'max' => [
        'array' => 'Pole :attribute nie może mieć więcej niż :max elementów.',
        'file' => 'Pole :attribute nie może być większe niż :max kilobajtów.',
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string' => 'Pole :attribute nie może mieć więcej niż :max znaków.',
    ],
    'min' => [
        'array' => 'Pole :attribute musi mieć przynajmniej :min elementów.',
        'file' => 'Pole :attribute musi mieć przynajmniej :min kilobajtów.',
        'numeric' => 'Pole :attribute musi być co najmniej :min.',
        'string' => 'Pole :attribute musi mieć przynajmniej :min znaków.',
    ],
    'numeric' => 'Pole :attribute musi być liczbą.',
    'required' => 'Pole :attribute jest wymagane.',
    'string' => 'Pole :attribute musi być ciągiem znaków.',
    'unique' => 'Pole :attribute jest już zajęte.',
    'url' => 'Pole :attribute musi być prawidłowym adresem URL.',
    'uuid' => 'Pole :attribute musi być prawidłowym identyfikatorem UUID.',

    /*
    |--------------------------------------------------------------------------
    | Atrybuty niestandardowe walidacji
    |--------------------------------------------------------------------------
    |
    | Poniższe linie językowe są używane do zamiany naszego symbolu zastępczego
    | atrybutu na coś bardziej czytelnego, takiego jak "Adres e-mail" zamiast
    | "email". Po prostu pomaga to uczynić naszą wiadomość bardziej zrozumiałą.
    |
    */

    'attributes' => [],

];
