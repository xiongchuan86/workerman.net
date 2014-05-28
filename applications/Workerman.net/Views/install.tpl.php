<div class="row clearfix">
	<div class="col-md-9 column">
	<h5>以阿里云云主机为例，安装小蝌蚪聊天室（安装workerman的其它应用是一样的过程）</h5>
	<a href="http://s.click.taobao.com/t?e=m%3D2%26s%3DGKeTyTP6Ah8cQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAhbL5GVocYPX6vFecR8G%2FoXXm6P3uOIyfg86qmwSDD1wfViFRpBEm%2BxEiFpG%2BYiVROdn1BbglxZYxUhy8exlzcq9AmARIwX9K2Zg%2BdzdQFOwfMRvoxSVDSdLyrb2g0H2G5JcxXijM%2BwneEHpPTskRHnPKdU%2FdTrgjbw4MC6y5nKlXF%2B87KN7TKeiZ%2BQMlGz6FQ%3D%3D" target="_blank"><img src="http://gtms01.alicdn.com/tps/i1/T1jhmAFQhbXXb34_n6-468-60.jpg" /></a>
	<h3><a href="#centos">阿里云centos系统</a></h3>
	<h3><a href="#debian&ubuntu">阿里云debian系统</a></h3>
	<h3><a href="#debian&ubuntu">阿里云ubuntu系统</a></h3>
	<h3><a name="centos">阿里云主机centos系统安装教程</a></h3>
	<h4>1、命令行运行<code>yum install php-cli php-process  git php-devel php-pear libevent-devel</code></h4>
	<h4>2、命令行运行<code>pecl install channel://pecl.php.net/libevent-0.1.0</code></h4>
	<h4>3、命令行运行<code>echo extension=libevent.so > /etc/php5/cli/conf.d/libevent.ini</code></h4>
	<h4>4、命令行运行<code>cd /home/ && git clone https://github.com/walkor/workerman-todpole</code></h4>
	<h4>5、命令行运行<code>/home/workerman-todpole/workerman/bin/workermand start</code></h4>
	<br>
	<h3><a name="debian&ubuntu">阿里云主机debian/ubuntu系统安装教程</h3>
	<h4>1、命令行运行<code>apt-get update && apt-get install php5-cli git php-pear php5-dev libevent-dev</code></h4>
	<h4>2、命令行运行<code>pecl install channel://pecl.php.net/libevent-0.1.0</code></h4>
	<h4>3、命令行运行<code>echo extension=libevent.so > /etc/php5/cli/conf.d/libevent.ini</code></h4>
	<h4>4、命令行运行<code>cd /home/ && git clone https://github.com/walkor/workerman-todpole</code></h4>
	<h4>5、命令行运行<code>/home/workerman-todpole/workerman/bin/workermand start</code></h4>
	</div>
	<div class="col-md-3 column">
	
	</div>
</div>
