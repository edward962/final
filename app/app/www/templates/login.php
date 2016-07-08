<?php include '../lib/message.php'; ?>
<ion-view title="Login">
    <ion-content overflow-scroll="true" padding="true" class="has-header">
        <form class="list validate" ng-submit="submit(action, username, password)">
          <input type="hidden" name="action" ng-model="action" value="login">
            <ion-list>
                <label class="item item-input">
                    <span class="input-label">Username</span>
                    <input type="text" ng-model="username" name="username" placeholder="">
                </label>
                <label class="item item-input">
                    <span class="input-label">Password</span>
                    <input type="password" ng-model="password" name="password" placeholder="">
                </label>
            </ion-list>
            <div class="spacer" style="height: 40px;"></div>
            <button type="submit" id="login-button4" class="button button-royal  button-block">Log in</button>
            <a ui-sref="register" id="login-button5" class="button button-royal  button-block button-clear">Dont have an account?</a>
            <a ui-sref="forgotPassword" id="login-button6" class="button button-royal  button-block button-clear">Forgot password?</a>
        </form>
    </ion-content>
</ion-view>