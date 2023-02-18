<?php
// 检查用户是否已经登录
session_start();
if (isset($_SESSION['username'])) {
  // 如果已经登录，显示欢迎信息
  echo '<p>欢迎回来，' . $_SESSION['username'] . '！</p>';
} else {
  // 如果未登录，显示登录表单
  echo '
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="用户名">
      <input type="password" name="password" placeholder="密码">
      <button type="submit">登录</button>
    </form>
  ';
}
?>