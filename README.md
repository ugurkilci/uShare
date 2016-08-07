# uShare
uShare, sosyal medya paylaşım kodlarını kolayca ulaşmamızı sağlar.


Sayfaya önce uShare'yi include edin.

Daha sonra uShare kısaltma kodları ile sosyal medya paylaşım kodlarını kolayca kullanabilirsiniz.

Örnek:
Facebook Paylaşım Kodu:
<code><pre><?php echo ushare("fb"); ?></pre></code>

uShare Kısaltmaları:
facebook (fb), Twitter (twt), Google+ (gpls), Pinterest(pin), LinkedIN (lin), VK (vk), Okru (okru), StumbleUpon (su), Reddit (rddt), Tumblr (tmblr), Blogger (blggr)

Eğer koda info yazarsanız, uShare Github linki çıkar.
<code><pre> <?php echo ushare("i.n.f.o"); ?>  </pre></code>

Sürüm 1.2 de renk kodları kullanımı için aşağıdaki kodu style tagları arasına yapıştırın.
<code><pre> <?php echo $ushstyle; ?>  </pre></code>
Daha sonra <pre>class=""</pre> içine 
-ush- ile başlayarak ushare kısaltmalarını yazın.
<code><pre> class="ushlin"  </pre></code>
