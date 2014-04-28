<p>Tools Base64 Image Encoder ini digunakan untuk merubah gambar kedalam bentuk base64 yang bertujuan untuk mengurangi permintaan http atau server lain ketika membuka sebuah halaman website atau blog.</p>

<blockquote>
<p><span style="color: #c0504d;">Keterangan:</span></p>

<p>1. jquery.min</p>

<p>2. jquery.form</p>

<p>3. Proses upload &amp; menampilkan menggunakan <span style="color: #c0504d;">Ajax</span><br>
</p>
</blockquote>

<p>Brikut contoh proses merubah <span style="color: #c0504d;">image</span> menjadi <span style="color: #c0504d;">Base64</span> menggunakan <span style="color: #c0504d;">PHP</span>:<br>
</p>


<pre>&lt;?php<br>
&nbsp; &nbsp;$path = 'image.jpg';<br>
&nbsp; &nbsp;$type = pathinfo($path, PATHINFO_EXTENSION);<br>
&nbsp; &nbsp;$data = file_get_contents($path);<br>
&nbsp; &nbsp;$base64 = '&lt;img src="data:image/' . $type . ';base64,' . base64_encode($data).'"/&gt;';<br>
&nbsp; &nbsp;echo $base64;&nbsp; &nbsp; &nbsp;<br>
?&gt;</pre>

<p><a href="http://ibacor.com/media/base64-image-encoder/" target="_blank">DEMO</a></p>
