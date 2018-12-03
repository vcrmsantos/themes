<?php
$pageTotal = ceil($resultTotalCount / $pageLimit); 
$modPage = floor($page/10);
$lastPage = 10 * ($modPage + 1);
$startPage = 10 * $modPage;
if($startPage == 0) {
	$startPage = 1;
}
if ($lastPage > $pageTotal)  {
	$lastPage = $pageTotal;	
}

if ($resultCount) :
?>
<div class="col-md-12 text-center">
	<ul class="pagination">
		<?php $classStartPage = ''; 
		$urlPrevPagination = '#';
		if ($page == 1) {
			$classStartPage = 'class="disabled"';
		} else {
			$urlPrevPagination = home_url() . '/imoveis?' . str_replace("&page=$page", '', $_SERVER['QUERY_STRING']);
			$prevPage = $page - 1;
			$urlPrevPagination .= '&page=' . $prevPage;
		}; ?>
		<li <?php echo $classStartPage; ?>>
	      <a href="<?php echo $urlPrevPagination; ?>" aria-label="Next" title="Anterior">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>		
		<?php
			
		for ($i = $startPage; $i <= $lastPage; $i++) :
			$paginationUrl = home_url() . '/imoveis?' . str_replace("&page=$page", '', $_SERVER['QUERY_STRING']);
			$paginationUrl .= '&page=' . $i;
		?>
		<li <?= ($page == $i) ? 'class="active"' : null; ?>>
			<a href="<?= $paginationUrl ?>" title="Página <?= $i; ?>">
				<?= $i; ?>
			</a>
		</li>
		<?php endfor; ?>
		<?php $classEndPage = ''; 
		$urlNextPagination = '#';
		if ($page == $pageTotal) {
			$classEndPage = 'class="disabled"';
		} else {
			$urlNextPagination = home_url() . '/imoveis?' . str_replace("&page=$page", '', $_SERVER['QUERY_STRING']);
			$nextPage = $page + 1;
			$urlNextPagination .= '&page=' . $nextPage;
		}; ?>
		<li <?php echo $classEndPage; ?>>
	      <a href="<?php echo $urlNextPagination; ?>" aria-label="Next" title="Próximo">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	</ul>
</div>
<div class="clearfix"></div>
<?php endif; ?>