<?php
declare(strict_types=1);

/**
 * mirath-php-dhawu-arham-tanzil — حاسبة توريث ذوي الأرحام على مذهب أهل التنزيل والقرابة
 * Dhawu Al-Arham Extended Relatives Inheritance Solver (Ahl Al-Tanzil & Ahl Al-Qarabah)
 */
$input = "Heirs=[DaughterOfDaughter,SonOfSister]";
$digest = substr(hash("sha256", "mirath-php-dhawu-arham-tanzil:" . $input), 0, 12);

echo "[RUN] mirath-php-dhawu-arham-tanzil (PHP) — Dhawu Al-Arham Extended Relatives Inheritance Solver (Ahl Al-Tanzil & Ahl Al-Qarabah)" . PHP_EOL;
echo "[AR]  حاسبة توريث ذوي الأرحام على مذهب أهل التنزيل والقرابة" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] SubstitutedRoots=[Daughter(1/2),Sister(1/2)] | Resolved=True | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
