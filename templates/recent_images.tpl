<div class="container">
	<div class="row">
		<div class="col-md-12">
			{foreach from=$recent_images item=value}
			<div class="im-all">
				<ul class="media-list">
				  <li class="media">
				    <a class="pull-left" href="{$value->img}">
				      <img class="media-object" src="{$value->thumb}" alt="...">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">{$value->comment}</h4>
				      <span class="pull-bottom">投稿者 : {$value->username}</span>
				    </div>
				  </li>
				</ul>
			</div>
			{/foreach}
		</div>
	</div>
</div>

