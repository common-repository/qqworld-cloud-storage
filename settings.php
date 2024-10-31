<style>
#qqworld-cloud-storage-contianer #banner {
	max-width: 100%;
	display: block;
	margin: 20px 0;
	border: 10px solid #fff;
	box-sizing: border-box;
	box-shadow: 3px 3px 5px rgba(0,0,0,.1);
}
@media screen and ( max-width: 1000px ) {
	#qqworld-cloud-storage-contianer #banner {
		height: auto;
	}
}
@media screen and ( max-width: 640px ) {
	#qqworld-cloud-storage-contianer #banner {
		border-width: 5px;
	}
}

#qqworld-cloud-storage-tabs {
	height: 40px;
	margin-top: 35px;
	border-bottom: 1px solid #aaa;
	box-shadow: inset 0 -7px 10px rgba(0,0,0,.05);
}
#qqworld-cloud-storage-tabs li {
	float: left;
	height: 39px;
	line-height: 39px;
	font-size: 24px;
	padding: 0 40px;
	border: 1px solid #aaa;
	margin: 0 5px;
	cursor: pointer;
	border-radius: 5px 5px 0 0;
	color: #aaa;
	-webkit-transition: width .25s, height .25s, background .25s, color .25s, box-shadow .25s;
	-moz-transition: width .25s, height .25s, background .25s, color .25s, box-shadow .25s;
	-o-transition: width .25s, height .25s, background .25s, color .25s, box-shadow .25s;
	-ms-transition: width .25s, height .25s, background .25s, color .25s, box-shadow .25s;
	transition: width .25s, height .25s, background .25s, color .25s, box-shadow .25s;
}
#qqworld-cloud-storage-tabs li:hover {
	color: #666;
	background: #fff;
	box-shadow: inset 0 -7px 10px rgba(0,0,0,.05);
}
#qqworld-cloud-storage-tabs li.current {
	color: #333;
	position: relative;
	top: 1px;
	height: 43px;
	line-height: 40px;
	border-bottom: none;
	background: #f1f1f1;
	box-shadow: none;
}

@media screen and ( max-width: 1320px ) {
	#qqworld-cloud-storage-tabs li {
		font-size: 24px;
		padding: 0 26px;
	}
}
@media screen and ( max-width: 1132px ) {
	#qqworld-cloud-storage-tabs li {
		font-size: 20px;
		padding: 0 22px;
	}
}
@media screen and ( max-width: 1000px ) {
	#banner {
		height: auto;
	}
	#qqworld-cloud-storage-tabs li {
		font-size: 18px;
		padding: 0 18px;
	}
}
@media screen and ( max-width: 728px ) {
	#qqworld-cloud-storage-tabs li {
		font-size: 14px;
		padding: 0 10px;
		margin: 0 3px;
	}
}
@media screen and ( max-width: 640px ) {
	#qqworld-cloud-storage-tabs li {
		font-size: 12px;
		padding: 0 8px;
		margin: 0 2px;
	}
}

.tab-content.hidden {
	display: none;
}

#qqworld-cloud-storage-contianer .qc-banner {
	max-width: 100%;
	display: block;
	margin: 20px 0;
	border: 10px solid #fff;
	box-sizing: border-box;
	box-shadow: 3px 3px 3px rgba(0,0,0,.1);
}

#products {

}

#products > li {
	width: 33.3333%;
	float: left;
	padding: 50px;
	box-sizing: border-box;
	-webkit-transition: transform .5s cubic-bezier(0.175,0.885,0.320,1.275);
	-moz-transition: transform .5s cubic-bezier(0.175,0.885,0.320,1.275);
	-o-transition: transform .5s cubic-bezier(0.175,0.885,0.320,1.275);
	-ms-transition: transform .5s cubic-bezier(0.175,0.885,0.320,1.275);
	transition: transform .5s cubic-bezier(0.175,0.885,0.320,1.275);
}
#products > li:hover {
	transform: scale(1.05, 1.05);
}
#products > li p {
	max-width: 300px;
}

#contact-list .qr-code {
	width: 200px;
	position: relative;
	-webkit-transition: filter .5s;
	-moz-transition: filter .5s;
	-o-transition: filter .5s;
	-ms-transition: filter .5s;
	transition: filter .5s;
}
#contact-list .qr-code:hover {
	filter: drop-shadow(0 0 10px rgba(0,0,0,.15));
	z-index: 1;
}
	#contact-list .qr-code.qq,
	#contact-list .qr-code.wechat {
		width: 420px;
	}


#qqworld-cloud-storage-contianer #comparison-table td.green {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAQCAMAAAAlM38UAAABMlBMVEUAAAAvmgcznA0wjA4tlQojkwAklAE0nQwtmAgikgAumAotmAYvmgohkgEolgYhkwNesUY0nQw4hBk1ihQplgRDox8qlwRLpyM2nRVDox03mRA1nBI1nA5KpicmlQc5nhAgkgByuzI9oBFPqStesCVitCWKxT2SyT05nhB+wDWcz0ZcpTV9v1Cdz0CZzEa02neCwjh2vTNptTNuuDBsuC2Jxm9suCHO52CGwzbC4Vuw2FBSqjC934CTykK221as1lDN54Sk0kpvs0daqSuFw2CIxDO63nLU6YB+wFeKxTu02luEw0LB4HSt1m5ntCk4kxVqsD1ntidKpyeUy1yUymB4vCfH5Ky1236s14F3vSvF457b7Wfn85bi8IHP53m93oxZrjnW6oi43FLC4H2h0UpLpycSo93OAAAAU3RSTlMANA6/v5hWCz9PxSk4oEVC/QX+9yPJzu/r5/eiqv2A+lv//////////v///////////////////////////////////////////////////////kPDU5EAAADWSURBVBjTY8AAnKnSDFhElWOCebGIJkbHhsgAWdyc7EiiDuZJ5nGpQFFxHVaYKJuyg6WVpZUSH4OIhK87TJzTOtnO0c5RiZ+BQVLfS9fHAyzOZm1jr2WvpcQHZIt66+qpu7kALVdIsNFST7FV4gApYRcz1vN01TeV4xOIV7ew9QSKggETl5+aQWi4qUCUhaaaJkQUrJ5F1cDQLCIs0kxTUYMH4QV2LhXDQBNFVUVjDahaqDkszooqKiZGUjyoXhZk0TZSDfBnRA8KdmZtJ2GgCZjiQshqAS2MHUxeD+kOAAAAAElFTkSuQmCC);
	background-position: center center;
	background-repeat: no-repeat;
}
#qqworld-cloud-storage-contianer #comparison-table td.red {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAzFBMVEUAAADNNx3KMRXOMRrMOyDLNRrJLxPMPSHILxLMPCDOPiHPQSbTUz7QLBTTSDLLMxnHLhPKNRnNMRrOLRnVLxjtLxrpJBLVAgHoHg7dBgTUUDrlEgbqMRjySijTSDL5UivyLhn7bl3XTTn+WS7gVEH9YTP9cVvhHxHvQSPdDgfLBALYCQXsVUvvNRjkFwzMJBTiDwjmTUjeRETPKBbnUUnUTTnpSDX3WDLzcFjzUij2Syn2XjD9Vkr4Nhz/UCf+cFX5ajj7bzfURC3YSzZTfvKQAAAAH3RSTlMAjm37bWpQZ2dQhony8vuJhlD9///////////////+4lBxZAAAANBJREFUGNMtjlUSg0AQRBuCxqt2Q7AQPO6u2P3vlF3Cq6mZ7vl6AIRSRI1YCvwM46DSeNCqIB4CgziL0lBjPUyjLB7Ae3+LJA0VJUyT4vv2INNPkkdBvx9EefKhMqBSf/qa3u9s+VQFQ6L+83G7PZ4+lVCj99wJw+3p+KN0r5v5fHPtKo2PvR65IzZrW6x97LNpGLOZYZhnWwPky8Ext4tWa7E1ncNFhne0nP2K6DpZ7R3r6KFzGltjogIqYeHUAdq7Je/8s9y1eRBI4yMRAfgB/N4W4X0kdh8AAAAASUVORK5CYII=);
	background-position: center center;
	background-repeat: no-repeat;
}

#qqworld-cloud-storage-contianer #comparison-table .price {
	font-size: 22px;
	font-family: fantasy;
}

#qqworld-cloud-storage-contianer #product-info thead th {
	white-space: nowrap;
	width: auto;
	text-align: center;
	padding: 8px 5px;
}
#qqworld-cloud-storage-contianer #product-info tbody td.green {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAQCAMAAAAlM38UAAABMlBMVEUAAAAvmgcznA0wjA4tlQojkwAklAE0nQwtmAgikgAumAotmAYvmgohkgEolgYhkwNesUY0nQw4hBk1ihQplgRDox8qlwRLpyM2nRVDox03mRA1nBI1nA5KpicmlQc5nhAgkgByuzI9oBFPqStesCVitCWKxT2SyT05nhB+wDWcz0ZcpTV9v1Cdz0CZzEa02neCwjh2vTNptTNuuDBsuC2Jxm9suCHO52CGwzbC4Vuw2FBSqjC934CTykK221as1lDN54Sk0kpvs0daqSuFw2CIxDO63nLU6YB+wFeKxTu02luEw0LB4HSt1m5ntCk4kxVqsD1ntidKpyeUy1yUymB4vCfH5Ky1236s14F3vSvF457b7Wfn85bi8IHP53m93oxZrjnW6oi43FLC4H2h0UpLpycSo93OAAAAU3RSTlMANA6/v5hWCz9PxSk4oEVC/QX+9yPJzu/r5/eiqv2A+lv//////////v///////////////////////////////////////////////////////kPDU5EAAADWSURBVBjTY8AAnKnSDFhElWOCebGIJkbHhsgAWdyc7EiiDuZJ5nGpQFFxHVaYKJuyg6WVpZUSH4OIhK87TJzTOtnO0c5RiZ+BQVLfS9fHAyzOZm1jr2WvpcQHZIt66+qpu7kALVdIsNFST7FV4gApYRcz1vN01TeV4xOIV7ew9QSKggETl5+aQWi4qUCUhaaaJkQUrJ5F1cDQLCIs0kxTUYMH4QV2LhXDQBNFVUVjDahaqDkszooqKiZGUjyoXhZk0TZSDfBnRA8KdmZtJ2GgCZjiQshqAS2MHUxeD+kOAAAAAElFTkSuQmCC);
	background-position: center center;
	background-repeat: no-repeat;
}
#product-info tbody td.red {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAzFBMVEUAAADNNx3KMRXOMRrMOyDLNRrJLxPMPSHILxLMPCDOPiHPQSbTUz7QLBTTSDLLMxnHLhPKNRnNMRrOLRnVLxjtLxrpJBLVAgHoHg7dBgTUUDrlEgbqMRjySijTSDL5UivyLhn7bl3XTTn+WS7gVEH9YTP9cVvhHxHvQSPdDgfLBALYCQXsVUvvNRjkFwzMJBTiDwjmTUjeRETPKBbnUUnUTTnpSDX3WDLzcFjzUij2Syn2XjD9Vkr4Nhz/UCf+cFX5ajj7bzfURC3YSzZTfvKQAAAAH3RSTlMAjm37bWpQZ2dQhony8vuJhlD9///////////////+4lBxZAAAANBJREFUGNMtjlUSg0AQRBuCxqt2Q7AQPO6u2P3vlF3Cq6mZ7vl6AIRSRI1YCvwM46DSeNCqIB4CgziL0lBjPUyjLB7Ae3+LJA0VJUyT4vv2INNPkkdBvx9EefKhMqBSf/qa3u9s+VQFQ6L+83G7PZ4+lVCj99wJw+3p+KN0r5v5fHPtKo2PvR65IzZrW6x97LNpGLOZYZhnWwPky8Ext4tWa7E1ncNFhne0nP2K6DpZ7R3r6KFzGltjogIqYeHUAdq7Je/8s9y1eRBI4yMRAfgB/N4W4X0kdh8AAAAASUVORK5CYII=);
	background-position: center center;
	background-repeat: no-repeat;
}

#qqworld-cloud-storage-contianer #product-info .qc-svg {
	padding-left: 120px;
	background-size: 120px;
	background-position: 0 center;
	background-repeat: no-repeat;
}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.collection {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/collection.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.attachments {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/attachments.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.watermark {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/footprint.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.translate {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/chinese.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.cloud-storage {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/cloud-storage.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.proxy {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/agent.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.database {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/database.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.anchor {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/anchor.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.pseudo-original {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/pseudo-original.svg);
	}
	#qqworld-cloud-storage-contianer #product-info .qc-svg.cleaner {
		background-image: url(<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/svg/cleaner.svg);
	}
</style>
<div id="qqworld-cloud-storage-contianer" class="wrap">
	<h2><?php _e('QQWorld Cloud Storage', $this->text_domain); ?></h2>
	<p><?php _e('Support Alibaba Cloud OSS, Tencent Cloud COS, Seven Niu Cloud Storage, Cloud Cloud Storage, Baidu Cloud BOS and all cloud storage that supports mirroring back to the source.', $this->text_domain); ?></p>
	<p><img src="<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/banner-772x250.png" width="772" height="250" id="banner" /></p>
	<form method="post" action="options.php">
		<?php settings_fields($this->text_domain); ?>

		<ul id="qqworld-cloud-storage-tabs">
			<li class="current"><?php _e('Settings', $this->text_domain); ?></li>
			<li><?php _e('Commercial Edition', $this->text_domain); ?></li>
			<li><?php _e('Contact', $this->text_domain); ?></li>
		</ul>

		<div class="tab-content">
			<p><?php _e('This plugin only provides basic functionality. For more features, please purchase a commercial version, such as more cloud storage, delete local attachments to create a remote media library, or aggregate mode.', $this->text_domain); ?></p>
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							<label for="settings-url"><?php _e('Cloud Stoarge URL', $this->text_domain); ?></label>
						</th>
						<td>
							<input type="text" id="settings-url" name="qqworld-cloud-storage[url]" class="regular-text" placeholder="https://..." value="<?php print $this->url; ?>" />/wp-content/uploads/2019/04/example.jpg
							<p><?php _e("Please enter the root address of the cloud storage, and don't forget to turn on mirroring back to the source in the cloud storage admin panel.", $this->text_domain); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="settings-enable"><?php _e('Enable', $this->text_domain); ?></label>
						</th>
						<td>
							<label><input type="checkbox" id="settings-enable" name="qqworld-cloud-storage[enable]" value="1" <?php checked('1', $this->enable)?> /> <?php _e('I have correctly set up the mirror back to the source', $this->text_domain); ?></label>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row"><?php _e('Video Tutorial', $this->text_domain); ?></th>
						<td>
							<p><a href="https://www.qqworld.org/archives/4423" target="_blank"><?php _e('WordPress uses Alibaba Cloud OSS as a media library to save images', $this->text_domain); ?></a></p>
							<p><a href="https://www.qqworld.org/archives/4441" target="_blank"><?php _e('WordPress uses Qiniu Cloud Storage as a media library to save images', $this->text_domain); ?></a></p>
							<p><a href="https://www.qqworld.org/archives/4452" target="_blank"><?php _e('WordPress uses Tencent COS as a media library to save images', $this->text_domain); ?></a></p>
							<p><a href="https://www.qqworld.org/archives/5198" target="_blank"><?php _e('WordPress uses Baidu BOS as a media library to save images', $this->text_domain); ?></a></p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="tab-content hidden">
			<div id="cron-list-container">
				<p><img src="<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/qcd-banner-772x250.jpg" width="772" height="250" class="qc-banner" /></p>
				<table id="product-info" class="form-table">
					<tbody>
						<tr valign="top">
							<th scope="row"><label><?php _e('Why buy QQWorld Collector', $this->text_domain); ?></label></th>
							<td>
								<ol>
									<li><?php _e('The best way to grab the image plugin, the same remote image will not be saved repeatedly, grab remote images and sync to cloud storage in one go.', $this->text_domain); ?></li>
									<li><?php _e('Perfect support for the Gutenberg editor, you can automatically parse the HTML and generate the corresponding block after saving the image.', $this->text_domain); ?></li>
									<li><?php _e('It is possible to prohibit the generation of various thumbnail sizes.', $this->text_domain); ?></li>
									<li><?php _e('Support dozens of cloud storage, Multiple cloud storage can be used simultaneously in JoinMode.', $this->text_domain); ?></li>
									<li><?php _e("The best general-purpose collection plug-in can be used to collect almost all websites such as WeChat public number and today's headlines.", $this->text_domain); ?></li>
									<li><?php _e('There are a large number of collection video tutorials for reference. If you encounter difficulties, you can consult customer service for free, or you can purchase the service at a low price.', $this->text_domain); ?></li>
									<li>...</li>
								</ol>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><label><?php _e('Purchase', $this->text_domain); ?></label></th>
							<td>
								<p><?php _e("The commercial edition's plugin name is <strong>QQWorld Collector</strong>, Does the feeling of maintaining the site work very heavy? This plugin will save you a lot of time!", $this->text_domain); ?></p>
								<p><?php printf(__('Price: from <strong>%s</strong>', $this->text_domain), _x('$15 (RMB &#165;99)', 'price', $this->text_domain)); ?></p>
								<p><a href="https://www.qqworld.org/product/qqworld-collector" target="_blank" class="button button-primary"><?php _e('Details or Purchase', $this->text_domain); ?> &#8667;</a></p>
								<p><a href="<?php _e('http://www.qqworld.org/how-to-buy-en?locale=en_US', $this->text_domain); ?>" target="_blank"><?php _e('How to buy?', $this->text_domain); ?></a> | <a href="<?php _e('https://www.qqworld.org/product-activation-en?locale=en_US', $this->text_domain); ?>" target="_blank" target="_blank"><?php _e('Product Activation', $this->text_domain); ?></a></p>
								<?php printf(__('<h2>Don\'t know Chinese?</h2><p>Don\'t worry, click on this <a href="%s" target="_blank">link</a> to transfer important content from the website to English and then happily register, purchase and activate the product.</p>', $this->text_domain), 'https://www.qqworld.org/product/qqworld-collector?locale=en_US'); ?>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><label><?php _e('Download &amp; Trial', $this->text_domain); ?></label></th>
							<td>
								<p class="hidden">
									<a href="https://pan.baidu.com/s/1IgQ1mQV97rn-p1zm15UtBA" class="button button-primary button-large qc-icon download" target="_blank"><?php _e('Baidi Network Disk', $this->text_domain); ?> &#8667;</a> <?php printf(_x('Code: %s', 'baidu',  $this->text_domain), 'td9o');?>
								</p>
								<p class="hidden">
									<a href="https://drive.google.com/open?id=1MPiqkC1y4b1dlI29kDyB36aQEjx_0m4G" class="button button-primary button-large qc-icon download" target="_blank"><?php _e('Google Drive', $this->text_domain); ?> &#8667;</a>
								</p>
								<p><?php _e('Please choose the fastest network disk for you and download the latest version of the date.', $this->text_domain); ?></p>
								<table class="wp-list-table widefat striped posts">
									<thead>
										<tr>
											<td class="manage-column column-cb check-column"></td>
											<th class="manage-column"><?php _e('Baidi Network Disk', $this->text_domain); ?></th>
											<th class="manage-column"><?php _e('Tencent WeiYun', $this->text_domain); ?></th>
											<th class="manage-column"><?php _e('Google Drive', $this->text_domain); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="check-column"></th>
											<td align="center"><a href="https://pan.baidu.com/s/1y5ZRgMbRHhq4lTPzxk3wlg" class="button button-primary button-large qc-icon download" target="_blank"><?php _e('Download', $this->text_domain); ?> &#8667;</a> <?php printf(_x('Code: %s', 'baidu', $this->text_domain), 'n1v2'); ?></td>
											<td align="center"><a href="https://share.weiyun.com/5oYlXvE" class="button button-primary button-large qc-icon download" target="_blank"><?php _e('Download', $this->text_domain); ?> &#8667;</a></td>
											<td align="center"><a href="https://drive.google.com/open?id=0B8SziOUSW1wpT283ZWc5ZUNsUXM" class="button button-primary button-large qc-icon download" target="_blank"><?php _e('Download', $this->text_domain); ?> &#8667;</a></td>
										</tr>
									</tbody>
								</table>
								<p><?php _e('After installation, click the activation button of the corresponding version to try it for 15 days (with certain restrictions)', $this->text_domain); ?></p>
								<h3><?php _e('Installation instructions', $this->text_domain); ?></h3>
								<dl>
									<dt><strong><?php _e('"Link expired" when uploading plugin zip', $this->text_domain); ?></strong></dt>
									<dd><?php _e("Because the plugin calls a large number of libraries and rich graphic help files, so the file is relatively large, please ensure that the server's PHP settings allow uploading large files, otherwise please unzip the installation package and use FTP to upload to the website's <em>wp-content/plugins</em> table of Contents.", $this->text_domain); ?></dd>
									<dt><strong><?php _e('Fatal error when activating plugin: Warning: require(phar:///...', $this->text_domain); ?></strong></dt>
									<dd><?php _e("The plugin requires PHP's Phar extension support. Please make sure that your PHP version is higher than or equal to 5.3, and compile and install the Phar extension. Some virtual hosts do not support Phar, so you cannot use this plugin.", $this->text_domain); ?></dd>
									<dt><strong><?php _e('Fatal error when activating plugin: Parse error: syntax error, unexpected \'}\', ..', $this->text_domain); ?></strong></dt>
									<dd><?php _e('Servers that use some PHP cryptographic modules are not supported, such as the Loader.so required for the tint theme. This cryptographic module is not compatible with Phar and can produce inexplicable error reports.', $this->text_domain); ?></dd>
								</dl>
							</td>
						</tr>
						<tr valign="top" class="hidden">
							<th scope="row"><label><?php _e('Documents', $this->text_domain); ?></label></th>
							<td>
								<ol>
									<li><a href="https://www.qqworld.org/archives/4282" target="_blank">批量采集微信公众号、百度百家、今日头条和淘宝头条</a></li>
									<li><a href="https://www.qqworld.org/archives/4383" target="_blank">WordPress最强云存储插件</a></li>
									<li><a href="https://www.qqworld.org/archives/4452" target="_blank">WordPress使用腾讯云COS作为媒体库保存图片</a></li>
									<li><a href="https://www.qqworld.org/archives/4441" target="_blank">WordPress使用七牛云存储作为媒体库保存图片</a></li>
									<li><a href="https://www.qqworld.org/archives/4399" target="_blank">抓取WordPress自定义栏目中的远程图像</a></li>
									<li><a href="https://www.qqworld.org/archives/4423" target="_blank">WordPress使用阿里云OSS作为媒体库保存图片</a></li>
									<li><a href="https://www.qqworld.org/archives/4524" target="_blank">QQWorld收藏家支持远程发布啦~</a></li>
									<li><a href="https://www.qqworld.org/archives/4512" target="_blank">WordPress使用贴图库作为远程云存储媒体库(不稳定，请不要用)</a></li>
									<li><a href="https://www.qqworld.org/archives/4475" target="_blank">QQWorld收藏家旗舰版采集教程</a></li>
									<li><a href="https://www.qqworld.org/archives/4507" target="_blank">批量采集微信公众号最近10次群发文章</a></li>
									<li><a href="https://www.qqworld.org/archives/4533" target="_blank">QQWorld收藏家之水印</a></li>
									<li><a href="https://www.qqworld.org/archives/4600" target="_blank">建立微信公众号本地采集服务器</a></li>
									<li><a href="https://www.qqworld.org/archives/4797" target="_blank">批量采集早期的公众号文章（iDataAPI）</a></li>
									<li><a href="https://www.qqworld.org/archives/4824" target="_blank">新魔法采集：QQWorld收藏家采集AJAX加载的网站</a></li>
									<li><a href="https://www.qqworld.org/archives/4857" target="_blank">采集需要登录的网站并自动下载其资源</a></li>
									<li><a href="https://www.qqworld.org/archives/4881" target="_blank">新增魔法采集：从列表页采集内容</a></li>
									<li><a href="https://www.qqworld.org/archives/4941" target="_blank">使用QQWorld收藏家抓取防盗链防采集的远程图片</a></li>
									<li><a href="https://www.qqworld.org/archives/4969" target="_blank">WordPress使用新浪图床作为媒体库保存图片</a></li>
								</ol>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><label><?php _e('Introduction', $this->text_domain); ?></label></th>
							<td><fieldset>
								<legend class="screen-reader-text"><span><?php _e('Introduction', $this->text_domain); ?></span></legend>
									<?php _e('<iframe width="1024" height="600" src="https://www.youtube.com/embed/LtrQITIhScQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', $this->text_domain); ?>	
							</fieldset></td>
						</tr>
						<tr valign="top">
							<th scope="row"><label><?php _e('Auto Save Attachments', $this->text_domain); ?></label></th>
							<td><fieldset>
								<legend class="screen-reader-text"><span><?php _e('Auto Save Attachments', $this->text_domain); ?></span></legend>
									<?php _e('<iframe width="1024" height="600" src="https://www.youtube.com/embed/8OPhE9t716Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', $this->text_domain); ?>
								<p><?php _e('Perfect support for the Gutenberg editor, you can automatically parse the HTML and generate the corresponding block after saving the image.', $this->text_domain); ?></p>
								<p><a href="https://www.qqworld.org/archives/category/videos" target="_blank" class="button button-primary"><?php _e('More Video Tutorials', $this->text_domain); ?></a></p>
							</fieldset></td>
						</tr>
						<tr>
							<th><?php _e('Edition Introduction', $this->text_domain); ?></th>
							<td>
								<table class="wp-list-table widefat striped posts">
									<thead>
										<tr>
											<td class="manage-column column-cb check-column"></td>
											<th class="manage-column column-primary"><?php _e('Edition', $this->text_domain); ?></th>
											<th class="manage-column"><?php _e('Description', $this->text_domain); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="check-column"></th>
											<td class="column-primary">
												<strong><?php _e('Cloud Storage Edition', $this->text_domain); ?></strong>
												<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
											</td>
											<td data-colname="<?php _e('Description', $this->text_domain); ?>" class="column-description"><?php _ex('If you only need the cloud storage function, please purchase the Cloud Storage Edition, which supports 6 kinds of cloud storage in China, as well as AWS S3, FTP, sina chart bed, etc. You can automatically delete local attachments after synchronization and establish the remote cloud media library.', 'shopping guide', $this->text_domain); ?></td>
										</tr>
										<tr>
											<th scope="row" class="check-column"></th>
											<td class="column-primary">
												<strong><?php _e('Professional Edition', $this->text_domain); ?></strong>
												<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
											</td>
											<td data-colname="<?php _e('Description', $this->text_domain); ?>" class="column-description"><?php _ex('If you only need to capture remote image and watermark function, please buy Professional Edition.', 'shopping guide', $this->text_domain); ?></td>
										</tr>
										<tr>
											<th scope="row" class="check-column"></th>
											<td class="column-primary">
												<strong><?php _e('Server Edition', $this->text_domain); ?></strong>
												<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
											</td>
											<td data-colname="<?php _e('Description', $this->text_domain); ?>" class="column-description"><?php _ex('If you need to capture remote images, watermarks, and cloud storage, buy the Server Edition.', 'shopping guide', $this->text_domain); ?></td>
										</tr>
										<tr>
											<th scope="row" class="check-column"></th>
											<td class="column-primary">
												<strong><?php _e('Website Master Edition', $this->text_domain); ?></strong>
												<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
											</td>
											<td data-colname="<?php _e('Description', $this->text_domain); ?>" class="column-description"><?php _ex('If you need to capture remote image, watermark and collection function, but do not need cloud storage, please buy Website Master Edition, can be timed batch collection of Tmall, WeChat public number, toutiao today and taobao toutiao most of the sites.', 'shopping guide', $this->text_domain); ?></td>
										</tr>
										<tr>
											<th scope="row" class="check-column"></th>
											<td class="column-primary">
												<strong><?php _e('Ultimate Edition', $this->text_domain); ?></strong>
												<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
											</td>
											<td data-colname="<?php _e('Description', $this->text_domain); ?>" class="column-description"><?php _ex('If you want full functionality, buy the Ultimate Edition.', 'shopping guide', $this->text_domain); ?></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<th><?php _e('Website Edition', $this->text_domain); ?></th>
							<td>
								<table class="wp-list-table widefat striped">
								<thead>
									<tr>
										<td class="manage-column column-cb check-column"></td>
										<th class="manage-column column-primary" style="width: 150px;"><?php _e('Title', $this->text_domain); ?></th>	
										<th class="manage-column"><?php _e('Basic Edition', $this->text_domain); ?></th>
										<th class="manage-column"><?php _e('Single Site Edition', $this->text_domain); ?></th>
										<th class="manage-column"><?php _e('Multisite Edition', $this->text_domain); ?></th>
										<th class="manage-column"><?php _e('Unlimited Edition', $this->text_domain); ?></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" class="check-column"></th>
										<td class="column-primary">
											<strong><?php _e('Verification Method', $this->text_domain); ?></strong>
											<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
										</td>
										<td data-colname="<?php _e('Basic Edition', $this->text_domain); ?>"><?php _e('Top Level Domain', $this->text_domain); ?></td>
										<td data-colname="<?php _e('Single Site Edition', $this->text_domain); ?>"><?php _e('Top Level Domain', $this->text_domain); ?></td>
										<td data-colname="<?php _e('Multisite Edition', $this->text_domain); ?>"><?php _e('Top Level Domain', $this->text_domain); ?></td>
										<td data-colname="<?php _e('Unlimited Edition', $this->text_domain); ?>"><?php _e('Top Level Domain', $this->text_domain); ?></td>
									</tr>
									<tr>
										<th scope="row" class="check-column"></th>
										<td class="column-primary">
											<strong><?php _e('Activating Quantity', $this->text_domain); ?></strong>
											<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
										</td>
										<td data-colname="<?php _e('Basic Edition', $this->text_domain); ?>">1<?php _e(' (Include Subdomain)', $this->text_domain); ?></td>
										<td data-colname="<?php _e('Single Site Edition', $this->text_domain); ?>">1<?php _e(' (Include Subdomain)', $this->text_domain); ?></td>
										<td data-colname="<?php _e('Multisite Edition', $this->text_domain); ?>">1<?php _e(' (Include Subdomain)', $this->text_domain); ?></td>
										<td data-colname="<?php _e('Unlimited Edition', $this->text_domain); ?>"><?php _e('Unlimited', $this->text_domain); ?></td>
									</tr>
									<tr>
										<th scope="row" class="check-column"></th>
										<td class="column-primary">
											<strong><?php _e('Changeable times', $this->text_domain); ?></strong>
											<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
										</td>
										<td data-colname="<?php _e('Basic Edition', $this->text_domain); ?>"><?php printf(__('You must unlock to change your domain name (%s of unit price)', $this->text_domain), '40%'); ?></td>
										<td data-colname="<?php _e('Single Site Edition', $this->text_domain); ?>"><?php printf(__('%s times, Excessive need to unlock (%s of unit price, same as the unlock price of Basic Edition)', $this->text_domain), '5', '20%'); ?></td>
										<td data-colname="<?php _e('Multisite Edition', $this->text_domain); ?>"><?php printf(__('%s times, Excessive need to unlock (%s of unit price)', $this->text_domain), '5', '20%'); ?></td>
										<td data-colname="<?php _e('Unlimited Edition', $this->text_domain); ?>"><?php _e('Unlimited', $this->text_domain); ?></td>
									</tr>
									<tr>
										<th scope="row" class="check-column"></th>
										<td class="column-primary">
											<strong><?php _e('Suggest', $this->text_domain); ?></strong>
											<button type="button" class="toggle-row"><span class="screen-reader-text"><?php _e('Show more details'); ?></span></button>
										</td>
										<td data-colname="<?php _e('Basic Edition', $this->text_domain); ?>"><?php _e('Suitable for single sites, If you do not need to change domain names frequently, please purchase this edition.', $this->text_domain)?></td>
										<td data-colname="<?php _e('Single Site Edition', $this->text_domain); ?>"><?php _e("If you don't have a lot of websites, but you may want to change your domain more frequently, please purchase this edition.", $this->text_domain)?></td>
										<td data-colname="<?php _e('Multisite Edition', $this->text_domain); ?>"><?php printf(_x('If your site is <a href="%s" target="_blank" rel="noopener">Multi-Site mode</a>, please purchase this edition, just activate the main site domain name, unlimited sub site available.', 'shopping guide', $this->text_domain), 'https://www.qqworld.org/archives/5426'); ?></td>
										<td data-colname="<?php _e('Unlimited Edition', $this->text_domain); ?>"><?php _e('If you have more than 4 websites, please purchase an unlimited version to activate unlimited domain names across servers.', $this->text_domain); ?></td>
									</tr>
								</tbody>
							</table>
							</td>
						</tr>
						<tr>
							<th><?php _e('Edition Difference', $this->text_domain); ?></th>
							<td>
								<table id="product-info" class="wp-list-table widefat striped posts hidden">
									<thead>
										<tr>
											<th class="column-primary"></th>
											<th><?php _ex('Ultimate Edition', 'activation', $this->text_domain); ?></th>
											<th><?php _ex('Server Edition', 'activation', $this->text_domain); ?></th>
											<th><?php _ex('Professional Edition', 'activation', $this->text_domain); ?></th>
											<th><?php _ex('Free Edition', 'activation', $this->text_domain); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="column-primary"><?php _ex('Support for the new editor of Wordpress 5.0.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td class="column-primary"><?php _ex('Automatically delete the HTML code of remote images smaller than Minimum-Picture-Size.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Detecting replicated images in media library by Original-link and CRC (Only for new images that after v1.1 updated).', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Automatically exclude specified remote images by CRC.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Automatically delete html code of specified remote images by CRC.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('New manual mode with multi-thread<br> (Faster than automatic mode and modify Title &amp; Alt in realtime)', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Download Images from WeChat', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Cron Scan Posts', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Watermark', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Images Compression (JPG Only)', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Use Proxy', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Smart Grabbing, Automatically detect 2 images url<br> from href/src of remote image with outside link, and grab the bigger one.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Use Cookie-Free Domain &amp; CDN Servive (AliYun OSS, UpYun, QiNiu, Tencent COS)', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Database content replacement, easy to replace content in post content and post titles.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Automatic Collecting: Easy to collcet articles, and get all the images to choose from web pages.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="red"></td>
											<td class="red"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Translation (Baidu Translation, Google Translation)', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Set no remote images saved into media library, it means would not generate thumbnail with many sizes. but if you checked Set-Featured-Image, the first remote image will be saved into media library.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Support automatically convert BMP/WEBP to JPG.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Cleaner tool: If you have a huge media library and do not know how many attachments has not bean used. this tool will help you to find out.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Special Features: Automatically keep remote images in the custom fields to the local media library.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
											<td class="red"></td>
										</tr>
										<tr>
											<td><?php _ex('Special Features: Automatically delete attachments of post when deleting post.', 'activation', $this->text_domain); ?></td>
											<td class="green"></td>
											<td class="green"></td>
											<td class="red"></td>
											<td class="red"></td>
										</tr>
									</tbody>
								</table>
								<table id="comparison-table" class="wp-list-table widefat striped">
									<thead>
										<tr>
											<th><?php _e('Items', $this->text_domain); ?></th>
											<th class="comparison-cell"><?php _e('Ultimate Edition', $this->text_domain); ?></th>
											<th class="comparison-cell"><?php _e('Master Edition', $this->text_domain); ?></th>
											<th class="comparison-cell"><?php _e('Server Edition', $this->text_domain); ?></th>
											<th class="comparison-cell"><?php _e('Professional Edition', $this->text_domain); ?></th>
											<th class="comparison-cell"><?php _e('Cloud Storage Edition', $this->text_domain); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;249'); ?></center></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;149'); ?></center></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;99'); ?></center></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;65'); ?></center></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;49'); ?></center></td>
										</tr>
										<tr>
											<td class="qc-svg collection">
												<strong><?php _e('Collection Project', $this->text_domain); ?></strong>
												<ol>
													<li><?php _e('Self-built collection project, set collection rules, using object-oriented programming compared to 2.x, it is very convenient to collect AJAX loaded pages and filter any collected content.', $this->text_domain); ?></li>
													<li><?php _e('Manual collection, you can select the posts to be collected, you can collect them by importing archive links or singular post links.', $this->text_domain); ?></li>
													<li><?php _e('Automatically collect, set up scheduled tasks, and let the website automatically collect posts.', $this->text_domain); ?></li>
													<li><?php _e('A template that automatically adds a header template and a footer template to the collected posts in the collection project.', $this->text_domain); ?></li>
													<li><?php _e('Collection project store with video tutorials. You can purchase collection project directly.', $this->text_domain); ?></li>
													<li><?php _e('Basically, as long as it is not a digital signature encrypted website, it can be collected.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="red"></td>
										</tr>
										<tr>
											<td class="qc-svg attachments">
												<strong><?php _e('Auto Save Attachment', $this->text_domain); ?></strong>
												<ol>
													<li><?php _e('Support for new editors of Wordpress 5.0.', $this->text_domain); ?></li>
													<li><?php _e('Automatically save remote attachments, as long as the file format allowed by the Wordpress media library can be crawled.', $this->text_domain); ?></li>
													<li><?php _e('Automatically save remote attachments, as long as the file format allowed by the Wordpress media library can be crawled.', $this->text_domain); ?></li>
													<li><?php _e('Format the HTML code of the collected remote image.', $this->text_domain); ?></li>
													<li><?php _e('You can not use the media library.', $this->text_domain); ?></li>
													<li><?php _e('Scan the post to automatically save remote attachments from the old post to local.', $this->text_domain); ?></li>
													<li><?php _e('Set up scheduled tasks to scan posts.', $this->text_domain); ?></li>
													<li><?php _e('Set thumbnail crop position.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="red"></td>
										</tr>
										<tr>
											<td class="qc-svg watermark">
												<strong><?php _e('Watermark', $this->text_domain); ?></strong>
												<ol>
													<li><?php _e('Both image watermark and text watermark are supported.', $this->text_domain); ?></li>
													<li><?php _e('Scan the media library to watermark the image.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="red"></td>
										</tr>
										<tr>
											<td class="qc-svg translate">
												<strong><?php _e('Translate', $this->text_domain); ?></strong>
												<ol>
													<li><?php _e("You can use Baidu translation, Google free translation, Google translation and Simplified and Traditional chinese to translate the content of the article automatically or manually.", $this->text_domain); ?></li>
													<li><?php _e('Support automatic translation, manual translation or translation at the time of collection.', $this->text_domain); ?></li>
													<li><?php _e('Automatically translate post name.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="red"></td>
										</tr>
										<tr>
											<td class="qc-svg cloud-storage">
												<strong><?php _e('Cloud Storage', $this->text_domain); ?></strong>
												<p class="description"><?php _e("A domain that serves no cookies. The idea here is that you use a cookie-free domain to serve images, CSS files, scripts and whatnot, so that your users don't waste time and bandwidth transmitting cookies for them.", $this->text_domain); ?></p>
												<ol>
													<li><?php _e("Cookie-free domain: use the local server save attachments, the idea here is that you use a cookie-free domain to serve images, CSS files, scripts and whatnot, so that your users don't waste time and bandwidth transmitting cookies for them.", $this->text_domain); ?></li>
													<li><?php _e('Controllable Cloud Storage: FTP, Aliyun OSS, QiNiu Cloud Storage, UpYun Cloud Storage, Tencent COS, Baidu BOS, UCloud UFile Storage. Most of these cloud storage require payment, but data security is higher.', $this->text_domain); ?></li>
													<li><?php _e('Others Cloud Storage: Sina images storage, SM.MS etc. These cloud storage are free, but the resources are less controllable and have the potential to be lost.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="green"></td>
										</tr>
										<tr>
											<td class="qc-svg proxy">
												<strong><?php _e('Proxy', $this->text_domain); ?></strong>
												<ol>
													<li><?php _e("Static Proxy: You can directly fill in the IP and port of the proxy server, I hope you have fast proxy server.", $this->text_domain); ?></li>
													<li><?php _e('Dynamic proxy: All are paid proxy, you need to fill in the URL to dynamically get the proxy address.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="red"></td>
										</tr>
										<tr>
											<td class="qc-svg database">
												<strong><?php _e('Database', $this->text_domain); ?></strong>
												<p class="description"><?php _e("Help you to handle database content easily.", $this->text_domain); ?>
												<ol>
													<li><?php _e('Modify some characters in the database in batches.', $this->text_domain); ?></li>
													<li><?php _e('Batch restore the address of the controllable cloud storage to the local address.', $this->text_domain); ?></li>
													<li><?php _e('Automatically wipe specified tags or attributes in the post content.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="green"></td>
										</tr>
										<tr>
											<td class="qc-svg anchor">
												<strong><?php _e('Automatic Anchor', $this->text_domain); ?></strong>
												<p class="description"><?php _e('Automatically add tags anchor to the keywords in the post content.', $this->text_domain); ?></p>
												<ol>
													<li><?php _e('The anchor link is automatically set according to the manually set keywords when the post content is output.', $this->text_domain); ?></li>
													<li><?php _e('Automatically set up existing article tags.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="red"></td>
										</tr>
										<tr>
											<td class="qc-svg pseudo-original">
												<strong><?php _e('Pseudo Original', $this->text_domain); ?></strong>
												<p class="description"><?php _e('Automatically replace the keywords in the post content.', $this->text_domain); ?></p>
												<ol>
													<li><?php _e('Built-in tens of thousands of thesaurus.', $this->text_domain); ?></li>
													<li><?php _e('The thesaurus can be built manually.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="red"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="red"></td>
										</tr>
										<tr>
											<td class="qc-svg cleaner">
												<strong><?php _e('Cleaner', $this->text_domain); ?></strong>
												<p class="description"><?php _e('If you have a huge media library and do not know how many attachments has not bean used. this tool will help you to find out.', $this->text_domain); ?></p>
												<ol>
													<li><?php _e('Scan for attachments that are not in use and automatically delete them.', $this->text_domain); ?></li>
													<li><?php _e('Attachments to post are automatically deleted when the post is deleted.', $this->text_domain); ?></li>
													<li><?php _e('Automatically delete duplicated posts.', $this->text_domain); ?></li>
													<li><?php _e('Automatically delete empty posts.', $this->text_domain); ?></li>
												</ol>
											</td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>" class="green"></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>" class="red"></td>
										</tr>
										<tr>
											<td></td>
											<td data-colname="<?php _e('Ultimate Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;249'); ?></center></td>
											<td data-colname="<?php _e('Master Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;149'); ?></center></td>
											<td data-colname="<?php _e('Server Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;99'); ?></center></td>
											<td data-colname="<?php _e('Professional Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;65'); ?></center></td>
											<td data-colname="<?php _e('Cloud Storage Edition', $this->text_domain); ?>"><center><?php printf(__('From <span class="price">%s</span>', $this->text_domain), '&#165;49'); ?></center></td>
										</tr>
									</tbody>
								</table>

							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Contact -->
		<div class="tab-content hidden">
			<table id="contact-list" class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for=""><?php _ex('Developer', 'contact', $this->text_domain); ?></label></th>
						<td><?php _e('Michael Wang', $this->text_domain); ?></td>
					</tr>
					<tr>
						<th scope="row"><label for=""><?php _e('Official Website', $this->text_domain); ?></label></th>
						<td><a href="https://www.qqworld.org" target="_blank" class="button button-primary qc-icon link"><?php _e("QQWorld's Projects", $this->text_domain); ?></a></td>
					</tr>
					<tr>
						<th scope="row"><label for=""><?php _e('Email'); ?></label></th>
						<td><a href="mailto:<?php _e('Michael Wang', $this->text_domain); ?> <admin@qqworld.org>" class="button button-primary qc-icon mail">admin@qqworld.org</a></td>
					</tr>
					<tr>
						<th scope="row"><label for=""><?php _e('Tencent QQ', $this->text_domain); ?></label></th>
						<td><a href="http://wpa.qq.com/msgrd?v=3&uin=172269588&site=qq&menu=yes">172269588</a> (<?php printf(__('%s: ', $this->text_domain), __('QQ Group', $this->text_domain)); ?>3372914)<br /><br />
						<img src="<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/qrcode/qq-follow.png" class="qq qr-code" />
						<p><?php _e('Please use the QQ APP to scan the QR code.', $this->text_domain); ?></p></td>
					</tr>
					<tr>
						<th scope="row"><label for=""><?php _e('Wechat', $this->text_domain); ?></label></th>
						<td>kbzyzwxq (<?php printf(__('%s: ', $this->text_domain), __('WeChat Official Account', $this->text_domain)); _e('qqworld-project', $this->text_domain); ?>)<br /><br /><img src="<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/qrcode/wechat-follow.png" class="wechat qr-code" />
						<p><?php _e('Please use the WeChat APP to scan the QR code.', $this->text_domain); ?></p></td>
					</tr>
					<tr>
						<th scope="row"><label for=""><?php _e('Alipay', $this->text_domain); ?></label></th>
						<td><img src="<?php echo QQWORLD_CLOUD_STORAGE_URL; ?>images/qrcode/alipay-follow.png" class="qr-code" />
						<p><?php _e('Please use the Alipay APP to scan the QR code.', $this->text_domain); ?></p></td>
					</tr>
					<tr>
						<th scope="row"><label for=""><?php _e('Cellphone', $this->text_domain); ?></label></th>
						<td><a href="tel:13294296711" class="button button-primary qc-icon phone">13294296711</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php submit_button(); ?>
		<script>
		jQuery(document).on('click', '#qqworld-cloud-storage-tabs li', function() {
			var $ = jQuery;
			if (!$(this).hasClass('current')) {
				var index = $('#qqworld-cloud-storage-tabs li').index(this);
				$('#qqworld-cloud-storage-tabs li').removeClass('current');
				$(this).addClass('current');
				$('.tab-content').hide().eq(index).fadeIn('normal');
			}
			return false;
		});
		</script>
	</form>
</div>