# AlertMined
AlertMined ask your users if they want mined for you ! It's free!
Use AlertMined for your web it's:

AlertMined allows you to inform your users that you are using a mining script and asks them if he wants to mining for you. They adapts and translates this message only to the language of the user.

Why using AlertMined ?

- Inform your user
- Gives you a good reputation
- You do not force your users a miner
- The message and translated
- An API (PHP,JS,Other...)
- You can reward users who extract
- Full Responsive
- Easy to use
- It's free


AlertMined is a script JavaScript:

Copy the code and past on all pages of your website in your body!
```html
<script type="text/javascript">
var script=document.createElement("script");script.src="https://www.alertmined.tk/mined-script/",document.write(script.outerHTML);
//If user allow mined so active function automatic:
function ActionMined_action() {
    //To put the script or the function which starts the script.
}
</script>
```
Exemple with coinhive.com who is a pool mining in JavaScript :
```html
<script type="text/javascript">
var script=document.createElement("script");script.src="https://www.alertmined.tk/mined-script/",document.write(script.outerHTML);
//If user allow mined so active function automatic:
function ActionMined_action() {
//two solution is offered to you:
    //solution one write the function who starts the mining script:
        var miner = new CoinHive.Anonymous('YOUR KEY', { threads: 3 });
        miner.start(CoinHive.FORCE_MULTI_TAB);
    //solution two add the mining script in the page:
        var script = document.createElement('script');
        script.src = 'https://coinhive.com/lib/coinhive.min.js';
        document.write(script.outerHTML);
    //you can use one of two solutions or both.
}
</script>
```
Website: <https://www.alertmined.tk/>
