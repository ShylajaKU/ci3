<?
/***************************************************************************\
*  DKIM-CFG ($Id: dkim-cfg-dist.php,v 1.2 2008/09/30 10:21:52 evyncke Exp $)
*  
*  Copyright (c) 2008 
*  Eric Vyncke
*          
* This program is a free software distributed under GNU/GPL licence.
* See also the file GPL.html
*
* THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR 
* IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
* OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
* IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT,
* INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
* NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
* DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
* THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
* (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
*THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 ***************************************************************************/
 
// Uncomment the $open_SSL_pub and $open_SSL_priv variables and
// copy and paste the content of the public- and private-key files INCLUDING
// the first and last lines (those starting with ----)

$open_SSL_pub="-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzI34wEgYe/1AORt/lJEB
JiHHXc0Sf8CkZfYOBD88YyoEtbgAobrr2rAiVe+zFD4MRiebGsiehQL+ezGy1m91
38mey4t8gYUnnAq4ZQAe2yLORZgxHlTURT0cJuWyJ73Gx0glBoKcRO5NCqguhc1t
XOjL0EH3QTveoBlDZBYN+uvF0B0XZPVlDzz6KDFC+sLmA+nyacwrlrAKPMRwb2WR
tEU4rsoUh9HQiurZxc6O8nazKmupqAVgu0uEVDTXvzWhNQvtUM/7qMazpoNy3a5Z
kLqKKzE08zymjsgf5Phbl1b//4aFXVRuiKbljWWVQpb/KdVtYtHAV1pXNTO4gF4m
rQIDAQAB
-----END PUBLIC KEY-----" ;

$open_SSL_priv="-----BEGIN PRIVATE KEY-----
MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDMjfjASBh7/UA5
G3+UkQEmIcddzRJ/wKRl9g4EPzxjKgS1uAChuuvasCJV77MUPgxGJ5sayJ6FAv57
MbLWb3XfyZ7Li3yBhSecCrhlAB7bIs5FmDEeVNRFPRwm5bInvcbHSCUGgpxE7k0K
qC6FzW1c6MvQQfdBO96gGUNkFg3668XQHRdk9WUPPPooMUL6wuYD6fJpzCuWsAo8
xHBvZZG0RTiuyhSH0dCK6tnFzo7ydrMqa6moBWC7S4RUNNe/NaE1C+1Qz/uoxrOm
g3LdrlmQuoorMTTzPKaOyB/k+FuXVv//hoVdVG6IpuWNZZVClv8p1W1i0cBXWlc1
M7iAXiatAgMBAAECggEAGtFCG3NYQmkhUltYjpG0JNuo15NbKYSICRYJIGVp9VY8
59YHvyxSX4lX9wxF3hGEam4m14wVvDp4Qo5xc8uJGJ3GQ8k1uYVLfBmrsxIg+XnG
sTkSt3dHnQw19KOIh81JkjbTI9dbxW24i/0gnEoiXFvo3JTJZbQDq9mkDCsYCh1C
u19CvF94gSJW73HKCR50FfeMnlc84KuPi2OgP+b+xwUgVqXFfvu0W8Wjm4L0sU/6
Vb5PVhiGROM+zuFCV5pBRswR5+5L8bLlYMfcjZeRvyHehZjyqN/DuDH7NDU7AgDe
A3/3FgBMEip4OyIWEEKRvr2UjIvSsJ9cv/FqhyTGAQKBgQD7uQ56Old6kRcAVKtS
b7mefgv+Pbn9h0U7eGxoFZG+yvVTVZ/ozotOaSEodEU137vkzhcmW5aYrvv5Ct+e
UMaHMrbQ2dfoM6SBFKKVWD3BMkFEZbTPIgZoBFc9D6MDGmUrOcsKvrFtopVHcoVO
ngI9GUIG/wzEdkWB8PhC5/Jo1QKBgQDQB74arLJFDVGYC4Q6HC8GFIl/MxthT4X5
dwU2fOOYVWlrbulzkTHo4ZvyHlTnAmHJ5lJ0Y47UhR1gy3nlQ6FeoDTpVhG0HPl3
G7vCqYxDyhrzjXyg4GUQictcsJzgnXwUheln2YfEwh6n8wAuQpiDGS1Ih/1CikG5
KR0dJY0yeQKBgF1dglUrlo7LifCBdxoYfoyey+v9ESNMLQ2l2O+yMGDH/r5uH+XF
1j27GKVcmt8koRh4qHV9uxnerW7t7YtXAova75v/cOmbXgTSlos2M5GZBkRMRQge
4qlqEsF/L0NTYvrpcLoHiN/VUfEyNOe4C7SFzcuyhhXImHdd3XdTeMIRAoGAavmg
S41E+vdXXw2FCHDXyZOkBRId4VOIfHk06Ake7IX3ePSG/hPLC4uAqufoFwcFjFJx
UkKj/ysYqV7ZJwk5ITTXIKpO3kUMD7DmQ7r2UyHJ7DZ0wTHDJtcFCXwUn/i8Br26
Ado90/NS2mC+VguO69N1ktfDZ4U7OOEohIV771kCgYAZWbp5E3BIOy8XlDRIDy1d
/BO+MMoiyXGDJHWo0mXhPPJD/qjSxJiQvBjaHi0vLpRvHNGna8njFqLYs1uXDsnP
E3eGlekGgQIKFweWxBcD9+fEYld4fhAbObZl3Xz92oqU5o5FSwAPOs7DV+gn3Frv
uHO1xlrdi8VkxroFIBnjZg==
-----END PRIVATE KEY-----" ;

// DKIM Configuration

// Domain of the signing entity (i.e. the email domain)
// This field is mandatory
$DKIM_d='kforkalyanam.in' ;  

// Default identity 
// Optional (can be left commented out), defaults to no user @$DKIM_d
//$DKIM_i='@example.com' ; 

// Selector, defines where the public key is stored in the DNS
//    $DKIM_s._domainkey.$DKIM_d
// Mandatory
$DKIM_s='opensslbyme' ;

?>


<?php
/*

"v=DKIM1\;

MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzI34wEgYe/1AORt/lJEBJiHHXc0Sf8CkZfYOBD88YyoEtbgAobrr2rAiVe+zFD4MRiebGsiehQL+ezGy1m9138mey4t8gYUnnAq4ZQAe2yLORZgxHlTURT0cJuWyJ73Gx0glBoKcRO5NCqguhc1tXOjL0EH3QTveoBlDZBYN+uvF0B0XZPVlDzz6KDFC+sLmA+nyacwrlrAKPMRwb2WRtEU4rsoUh9HQiurZxc6O8nazKmupqAVgu0uEVDTXvzWhNQvtUM/7qMazpoNy3a5ZkLqKKzE08zymjsgf5Phbl1b//4aFXVRuiKbljWWVQpb/KdVtYtHAV1pXNTO4gF4mrQIDAQAB

*/