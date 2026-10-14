```php
<?php

function rupiah(int $amount): string {
    return 'Rp ' . number_format($amount, 0, ',', '.');
}

function statusKursus(int $quota, int $registered): string {
    return $registered >= $quota ? 'Penuh' : 'Tersedia';
}

function sisaKursi(int $quota, int $registered): int {
    return max(0, $quota - $registered);
}

function formatTanggal(string $date): string {
    $value = new DateTimeImmutable($date);
    return $value->format('d-m-Y');
}

// Mencari kursus berdasarkan kode kursus
function findCourse(array $courses, string $code): ?array {
    foreach ($courses as $course) {
        if (strcasecmp($course['code'], $code) === 0) {
            return $course;
        }
    }

    return null;
}

?>
```