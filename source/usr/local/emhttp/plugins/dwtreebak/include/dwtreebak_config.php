<?
/* Copyright Derek Macias (parts of code from NUT package)
 * Copyright macester (parts of code from NUT package)
 * Copyright gfjardim (parts of code from NUT package)
 * Copyright SimonF (parts of code from NUT package)
 * Copyright Dan Landon (parts of code from Web GUI)
 * Copyright Bergware International (parts of code from Web GUI)
 * Copyright Lime Technology (any and all other parts of Unraid)
 *
 * Copyright desertwitch (as author and maintainer of this file)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 2
 * as published by the Free Software Foundation.
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 */
$dwtreekbak_cfg = file_exists("/boot/config/plugins/dwtreebak/dwtreekbak.cfg") ? parse_ini_file("/boot/config/plugins/dwtreebak/dwtreebak.cfg") : [];

$dwtreekbak_cron = trim(isset($dwtreekbak_cfg['CRON']) ? htmlspecialchars($dwtreekbak_cfg['CRON']) : 'disable');
$dwtreekbak_cronhour = trim(isset($dwtreekbak_cfg['CRONHOUR']) ? htmlspecialchars($dwtreekbak_cfg['CRONHOUR']) : '1');
$dwtreekbak_crondow = trim(isset($dwtreekbak_cfg['CRONDOW']) ? htmlspecialchars($dwtreekbak_cfg['CRONDOW']) : '0');
$dwtreekbak_crondom = trim(isset($dwtreekbak_cfg['CRONDOM']) ? htmlspecialchars($dwtreekbak_cfg['CRONDOM']) : '1');

$dwtreekbak_backend = htmlspecialchars(trim(shell_exec("find /var/log/packages/ -type f -iname 'treeball-*' -printf '%f\n' 2> /dev/null") ?? "n/a"));
$dwtreekbak_binaries = htmlspecialchars(trim(shell_exec("command -v treeball 2> /dev/null") ?? "n/a"));
$dwtreekbak_running = !empty(shell_exec("pgrep -x treeball 2>/dev/null"));
?>
