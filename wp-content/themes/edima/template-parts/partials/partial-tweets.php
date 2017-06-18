<h5 class="text--upper"><i class="fa fa-lg fa-twitter"></i> @EDIMA_EU <a href="https://twitter.com/intent/follow?screen_name=EDiMA_EU" target="_blank" class="header-link">Follow Us</a></h5>

<div class="tweet__group tweet__group--fade">

    <?php $twitter = new Twitter; ?>

    <?php foreach($twitter->get_latest_tweets(3) as $tweet) : ?>
        <div class="tweet">
            <?php echo $twitter->linkify_twitter_status($tweet['text']); ?>
            <div class="tweet__meta"><?php echo date('d M \a\t H:i', strtotime($tweet['created_at'])); ?> <div class="tweet__buttons"><a href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $tweet['id']; ?>" target="_blank"><i class="fa fa-lg fa-reply" alt="Reply" title="Reply"></i></a> <a href="https://twitter.com/intent/retweet?tweet_id=<?php echo $tweet['id']; ?>" target="_blank"><i class="fa fa-lg fa-retweet" alt="Retweet" title="Retweet"></i></a> <a href="https://twitter.com/intent/like?tweet_id=<?php echo $tweet['id']; ?>" target="_blank"><i class="fa fa-lg fa-heart" alt="Like" title="Like"></i></a></div></div>
        </div>
    <?php endforeach; ?>

    <div class="tweet tweet--faded">&nbsp;</div>

</div>

<a href="http://twitter.com/EDiMA_EU" target="_blank" class="button button--primary">More Tweets</a>