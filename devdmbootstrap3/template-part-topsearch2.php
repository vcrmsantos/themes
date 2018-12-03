<div class="top-search container-fluid">
        <div class="row">
            

            <div class="col-md-2">
                <div class="filter">
                    <i class="fa fa-filter icon"></i><span>Filtrar por</span>
                </div>
            </div>
			
			<form method="get" action="<?= home_url() . '/imoveis' ?>" class="top-search-form col-md-10 text-center">
    			<div class="row">
                <div class="top-search-items col-md-10">
					<?php 
					echo (isset($topsearchtext)) ? $topsearchtext : null;
					$i = 1; 
					foreach ($searchFieldsPage as $id => $fields) : 
					?>
					<div class="col-md-2 <?= ($i > 8) ? ' search-item-special sr-only ' : '' ?><?= str_replace('[]', '', $id); ?>">
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
					

					

					
				</div>

                <div class="col-md-2 top-search-button text-center">
                     <?= (isset($topsearchtext)) ? '<p class="top-search-title">&nbsp;</p>' : null; ?>
					<button type="submit" id="advanced-search" class="btn-default btn-top-search text-center" name="bt"><i class="fa fa-plus">&nbsp;</i></button>
					<button type="submit" class="btn-default btn-top-search text-center" name="bt"><i class="fa fa-search">&nbsp;</i></button>
					<button type="reset" id="btn-reset" class="btn-default btn-top-search btn-gray" onclick="window.location.href='<?= home_url() ?>/imoveis?bt'">
						<i class="fa fa-times">&nbsp;</i>
					</button>
                </div>
				

				
                </div>
			</form>
			

        </div><!--/.row-->
	</div><!--/.container-->