<div class="span3">
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 5,
  interval: 30000,
  width: 'auto',
  height: 300,
  theme: {
    shell: {
      background: '#f5f5f5',
      color: '#333333'
    },
    tweets: {
      background: '#f5f5f5',
      color: '#333333',
      links: '#0080c0'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('draper_al').start();
</script>
</div>