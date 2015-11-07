<div id="content">
<div id="mainContainer">          
<div class="box">
<table style="margin-left:auto; margin-right:auto;width:800px;">
	<tr>
		<td><strong>Remote and Local File Inclusion<strong></td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr style="text-align: left;">
		<td><b>Current Page:</b> <?php echo $_GET['page']; ?></td>
	</tr>
	<tr>
		<td>
			Notice that the page displayed by Mutillidae is decided 
			by the value in the "page" URL parameter. What could possibly go wrong? 
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
			<div><strong>Local File Inclusion</strong></div>
			<br/>
			PHP runs on an account (like any other user). The account has privileges
			to the local file system with the ability to read, write, and/or execute files.
			Ideally the account would only have enough privileges to execute php files
			in a certain, intended directory but sadly this is often not the case.
			Local File Inclusion occurs when a file to which the PHP account has 
			access is passed as a parameter to the PHP function "include", "include_once",
			"require", or "require_once". PHP incorporates the content into the page. If
			the content happens to be PHP source code, PHP executes the file.
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
			<div><strong>Remote File Inclusion</strong></div>
			<br/>
			Remote File Inclusion occurs when the URI of a file located on a different 
			server is passed to  as a parameter to the PHP function "include", "include_once",
			"require", or "require_once". PHP incorporates the content into the page. If
			the content happens to be PHP source code, PHP executes the file.
			<br/><br/>
			<div style='color:#C00000;'><b>Note that on newer PHP servers the configuration parameters "allow_url_fopen"
			and "allow_url_include" must be set to "On".</b></div>
			<br/>
			By default, these may or may not 
			be "On" in newer versions. For example, by default in XAMPP 1.8.1, 
			"allow_url_fopen = On" by default but "allow_url_include = Off" by default. If you
			wish to try remote file inclusion, be sure these configuration parameters are set
			to "On" by going to the php.ini file, locating the parameters, setting their value to 
			"On", and restarting the Apache service. An example of this configuration appears below.
			<br/><br/>
			<code>
			<span>
			;;;;;;;;;;;;;;;;;;<br/>
			; Fopen wrappers ;<br/>
			;;;;;;;;;;;;;;;;;;<br/>
			<br/>
			; Whether to allow the treatment of URLs (like http:// or ftp://) as files.<br/>
			; http://php.net/allow-url-fopen<br/><br/>
			allow_url_fopen = On<br/>
			<br/>
			; Whether to allow include/require to open URLs (like http:// or ftp://) as files.<br/>
			; http://php.net/allow-url-include<br/><br/>
			allow_url_include = On<br/>
			</span>
			</code>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
</table>
</div>
</div>
</div>