# Prefetch Static Pages
A plugin for Bludit to [prefetch](https://developer.mozilla.org/en-US/docs/Web/HTTP/Link_prefetching_FAQ) the static pages and homepage of your site for snappy navigation.

## Considerations for use
* Bludit's Simple Stats plugin will record extra visitors. 
* Extraneous transfers/bandwidth. Need to verify this but so far it seems that while a subsequent visit to a prefetched page is retrieved from cache, the prefetch links encountered on that page will again incur transfers despite them being the same ones prefetched before.