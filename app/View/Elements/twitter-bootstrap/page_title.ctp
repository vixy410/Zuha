<?php $title = !empty($page_title_for_layout) ? $page_title_for_layout : Inflector::humanize($this->request->params['controller']); ?> 
<h1 class="span6 first pull-left"><?php echo $title; ?></h1>