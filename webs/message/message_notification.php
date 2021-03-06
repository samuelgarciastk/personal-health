<?php include '../../include/loginState.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>咚咕-要健康，用咚咕！</title>
	<link href="../../styles/global.css" rel="stylesheet">
	<link href="../../styles/message_notification.css" rel="stylesheet">
	<script src="../../scripts/jquery-2.1.4.min.js"></script>
	<script src='../../scripts/global.js'></script>
	<script src='../../scripts/message_notification.js'></script>
	<script src='../../scripts/canUse_create_message.js'></script>
</head>
<body>
	<div class="header_bg">
		<div class="header_repeat">
			<div class="header">
				<div class="logo fl"></div>
				<div class="menu fl">
					<ul>
						<li class="fl tc">
							<a href="../health/health_sport.php">运动</a>
						</li>
						<li class="fl tc">
							<a href="../activity/activity_list.php">活动</a>
						</li>
						<li class="fl tc attention" style="display: none">
							<a href="../manage/manage_link.php">关注</a>
						</li>
					</ul>
				</div>
				<div class="user_box">
					<ul>
						<li class="fl tc pr">
							<a href="../user/user_info.php" class="round">
								<img src="../../data/portrait/blank_portrait.jpg" id="user_portrait">
							</a>
						</li>
						<li class="fl tc">
							<a href="../message/message_notification.php" class="rectangle">
								<span class="msg_num" id="user_message">0</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="content_l fl">
			<p class="title">消息中心</p>
			<ul class="navigation">
				<li>
					<a href="message_notification.php" class="on">
						<p>我的通知</p>
					</a>
				</li>
				<li>
					<a href="message_suggestion.php">
						<p>我的建议</p>
					</a>
				</li>
				<li>
					<a href="create_message.php" class="link">
						<p class="authority">提出建议</p>
					</a>
				</li>
			</ul>
		</div>
		<div class="content_r fl">
			<div class="title">我的通知</div>
			<ul id="list">
				<input type="button" id="more" class="more" value="点击加载更多..." onclick="getSuggestion()">
			</ul>
		</div>
	</div>
	<div id="gotop"></div>
</body>
</html>