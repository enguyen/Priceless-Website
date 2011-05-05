<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#priceless2011',
  rpp: 10,
  interval: 6000,
  title: '',
  subject: '',
  width: 'auto',
  height: 300,
  theme: {
    shell: {
      background: 'none',
      color: '#ffffff'
    },
    tweets: {
      background: 'none',
      color: '#fff',
      links: '#fff'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    toptweets: true,
    behavior: 'all'
  }
}).render().start();
</script>