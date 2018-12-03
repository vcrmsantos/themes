<div id="top-search">
	<div class="container">
		<div class="col-sm-12">
			
			<form method="get" action="<?= home_url() . '/imoveis' ?>" class="top-search-form">
				<!--
				<div class="col-sm-2">
					<input type="checkbox" name="especial" class="sr-only"/>
					<div class="checkbox-big"></div>
					
					<span>Exclusividade e<br /> imóveis em exposição</span>
					
					<div class="clearfix"></div>
				</div>
				-->
				<div class="col-md-1"></div>
				
				<div class="col-md-8 top-search-items">
					<?php 
					echo (isset($topsearchtext)) ? $topsearchtext : null;
					$i = 1; 
					foreach ($searchFieldsPage as $id => $fields) : 
					?>
					<div class="col-md-2 <?= ($i > 8) ? ' search-item-special sr-only ' : '' ?> <?= str_replace('[]', '', $id); ?>">
						<?php if ($i == 8) : ?>
							<input type="text" name="reference" placeholder="Código de referência" value="<?= (isset($_GET['reference'])) ? $_GET['reference'] : null ?>" />
						<?php else : ?>
							<select id="<?= str_replace('[]', '', $id); ?>" name="<?= $id; ?>" <?= ($fields['multi']) ? 'multiple="multiple"' : null ?>>
								<?php 
								foreach ($fields['options'] as $key => $value) :
									$selected = null;
									
									if ($fields['multi']) :
										// limpo o pai
										$parent = str_replace('[]', '', $id);
										
										// verifico se tentou buscar e se é array mesmo
										if (isset($_GET[$parent]) && is_array($_GET[$parent])) :
											// passo por todas opções
											// se a opção existir então eu a seleciono
											foreach ($_GET[$parent] as $sopt) :
												if ($key == $sopt) :
													$selected = 'selected="selected"';
												endif;
											endforeach;
																					
										elseif (isset($_GET['region']) && !empty($_GET['region']) && !is_array($_GET['region'])):
											if ($key == $_GET['region']) :
												$selected = 'selected="selected"';
											endif;
										endif;
									else :
										// verifico se tentou buscar
										if (isset($_GET[$id]) && $_GET[$id] != '') :
											// se a opção estiver na URL então eu a seleciono
											if ($key == $_GET[$id]) :
												$selected = 'selected="selected"';
											endif;
										endif;
									endif;
								?>
									<option value="<?= $key; ?>" <?= $selected; ?>><?= $value; ?></option>
								<?php endforeach; ?>
							</select>
						<?php endif ?>
					</div>
					<?php 
						$i++; 
					endforeach; 
					?>
					
					<div class="clearfix"></div>
					
					<div class="col-md-10"></div>
					<div class="col-md-2">
						<a href="#" title="Busca avançada" class="btn btn-link" id="advanced-search"><span class="fa fa-plus"></span> Busca avançada</a>
					</div>
				</div>
				
				<div class="col-md-1 top-search-button">
					<?= (isset($topsearchtext)) ? '<p class="top-search-title">&nbsp;</p>' : null; ?>
					<button type="submit" class="btn-default btn-top-search" name="bt"><i class="fa fa-search">&nbsp;</i>Buscar</button>
				</div>
				
				<div class="col-md-1 top-search-button no-padding">
					<?= (isset($topsearchtext)) ? '<p class="top-search-title">&nbsp;</p>' : null; ?>
					<button type="reset" id="btn-reset" class="btn-default btn-top-search btn-gray" onclick="window.location.href='<?= home_url() ?>/imoveis?bt'">
						<i class="fa fa fa-eraser">&nbsp;</i>Limpar
					</button>
				</div>
				
				<div class="col-md-1"></div>
			</form>
			
		</div><!--.col-md-12-->
	</div><!--/.container-->
</div><!--/#top-search-->
