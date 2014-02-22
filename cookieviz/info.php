<?php
/*Copyright (c) 2013, Stéphane Petitcolas
This file is part of CookieViz

CookieViz is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

CookieViz is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with CookieViz.  If not, see <http://www.gnu.org/licenses/>.
*/

require 'connect.php';
$requeteUrlReferer=$connexion->prepare('SELECT * FROM url_referer WHERE referer_domains=:referer GROUP BY url_domains, referer_domains');
$requeteDomaine=$connexion->prepare('SELECT * FROM url_referer WHERE url_domains=:domain GROUP BY url_domains, referer_domains');

$domain='';
if(isset($_GET["domain"]))
{
	$domain = $_GET["domain"];
}
echo '
<table id="infos">
	<thead>
	<tr>
		<th>From</th>
		<th>To</th>
		<th>Cookies</th>
	</tr>
	</thead>
<tbody>';
$requeteUrlReferer->execute(array('referer' => $domain));
while ($line=$requeteUrlReferer->fetch(PDO::FETCH_ASSOC))
{
	if ($line["is_cookie"] == 1)
	{
		echo '
		<tr>
			<td>'.$line['referer_domains'].'</td>
			<td>'.$line['url_domains'].'</td>
			<td>1</td>
		</tr>';
	}
}

$requeteDomaine->execute(array('domain' => $domain));
while ($line=$requeteDomaine->fetch(PDO::FETCH_ASSOC))
{
	if ($line["is_cookie"] == 1)
	{
		echo ' 
		<tr>
			<td>'.$line["referer_domains"].'</td>
			<td>'.$line["url_domains"].'</td>
			<td>'.$line["is_cookie"].'</td>
		</tr>';
	}
}
echo '
</tbody>
</table>';
