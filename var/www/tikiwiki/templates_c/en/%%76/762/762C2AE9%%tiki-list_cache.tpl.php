<?php /* Smarty version 2.6.14, created on 2011-04-21 08:15:52
         compiled from tiki-list_cache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'tiki-list_cache.tpl', 15, false),array('modifier', 'tiki_short_datetime', 'tiki-list_cache.tpl', 33, false),array('modifier', 'times', 'tiki-list_cache.tpl', 58, false),)), $this); ?>
<h1><a href="tiki-list_cache.php" class="pagetitle">Cache</a>
  
      <?php if ($this->_tpl_vars['feature_help'] == 'y'): ?>
<a href="<?php echo $this->_tpl_vars['helpurl']; ?>
CacheDoc" target="tikihelp" class="tikihelp" title="admin cache">
<img src="img/icons/help.gif" border="0" height="16" width="16" alt='help' /></a><?php endif; ?>

      <?php if ($this->_tpl_vars['feature_view_tpl'] == 'y'): ?>
<a href="tiki-edit_templates.php?template=tiki-list_cache.tpl" target="tikihelp" class="tikihelp" title="View tpl: admin cache tpl">
<img src="img/icons/info.gif" border="0" height="16" width="16" alt='edit tpl' /></a><?php endif; ?></h1>

<table class="findtable">
<tr><td class="findtitle">Find</td>
   <td class="findtitle">
   <form method="get" action="tiki-list_cache.php">
     <input type="text" name="find" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['find'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
     <input type="submit" value="find" name="search" />
     <input type="hidden" name="sort_mode" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sort_mode'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
   </form>
   </td>
</tr>
</table>
<div  align="center">
<table class="normal">
<tr>
<td class="heading"><a class="tableheading" href="tiki-list_cache.php?offset=<?php echo $this->_tpl_vars['offset']; ?>
&amp;sort_mode=<?php if ($this->_tpl_vars['sort_mode'] == 'url_desc'): ?>url_asc<?php else: ?>url_desc<?php endif; ?>">URL</a></td>
<td class="heading"><a class="tableheading" href="tiki-list_cache.php?offset=<?php echo $this->_tpl_vars['offset']; ?>
&amp;sort_mode=<?php if ($this->_tpl_vars['sort_mode'] == 'refresh_desc'): ?>refresh_asc<?php else: ?>refresh_desc<?php endif; ?>">Last updated</a></td>
<td class="heading">Action</td>
</tr>
<?php unset($this->_sections['changes']);
$this->_sections['changes']['name'] = 'changes';
$this->_sections['changes']['loop'] = is_array($_loop=$this->_tpl_vars['listpages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['changes']['show'] = true;
$this->_sections['changes']['max'] = $this->_sections['changes']['loop'];
$this->_sections['changes']['step'] = 1;
$this->_sections['changes']['start'] = $this->_sections['changes']['step'] > 0 ? 0 : $this->_sections['changes']['loop']-1;
if ($this->_sections['changes']['show']) {
    $this->_sections['changes']['total'] = $this->_sections['changes']['loop'];
    if ($this->_sections['changes']['total'] == 0)
        $this->_sections['changes']['show'] = false;
} else
    $this->_sections['changes']['total'] = 0;
if ($this->_sections['changes']['show']):

            for ($this->_sections['changes']['index'] = $this->_sections['changes']['start'], $this->_sections['changes']['iteration'] = 1;
                 $this->_sections['changes']['iteration'] <= $this->_sections['changes']['total'];
                 $this->_sections['changes']['index'] += $this->_sections['changes']['step'], $this->_sections['changes']['iteration']++):
$this->_sections['changes']['rownum'] = $this->_sections['changes']['iteration'];
$this->_sections['changes']['index_prev'] = $this->_sections['changes']['index'] - $this->_sections['changes']['step'];
$this->_sections['changes']['index_next'] = $this->_sections['changes']['index'] + $this->_sections['changes']['step'];
$this->_sections['changes']['first']      = ($this->_sections['changes']['iteration'] == 1);
$this->_sections['changes']['last']       = ($this->_sections['changes']['iteration'] == $this->_sections['changes']['total']);
?>
<tr>
<?php if ($this->_sections['changes']['index'] % 2): ?>
<td class="odd">&nbsp;<a class="link" href="<?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['url']; ?>
</a>&nbsp;</td>
<td class="odd">&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['refresh'])) ? $this->_run_mod_handler('tiki_short_datetime', true, $_tmp) : smarty_modifier_tiki_short_datetime($_tmp)); ?>
&nbsp;</td>
<td class="odd">&nbsp;<a class="link" target="_blank" href="tiki-view_cache.php?cacheId=<?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['cacheId']; ?>
">view</a>&nbsp;<a class="link" href="tiki-list_cache.php?offset=<?php echo $this->_tpl_vars['offset']; ?>
&amp;sort_mode=<?php echo $this->_tpl_vars['sort_mode']; ?>
&amp;remove=<?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['cacheId']; ?>
">remove</a>&nbsp;<a class="link" href="tiki-list_cache.php?offset=<?php echo $this->_tpl_vars['offset']; ?>
&amp;sort_mode=<?php echo $this->_tpl_vars['sort_mode']; ?>
&amp;refresh=<?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['cacheId']; ?>
">refresh</a>&nbsp;</td>
<?php else: ?>
<td class="even">&nbsp;<a class="link" href="<?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['url']; ?>
</a>&nbsp;</td>
<td class="even">&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['refresh'])) ? $this->_run_mod_handler('tiki_short_datetime', true, $_tmp) : smarty_modifier_tiki_short_datetime($_tmp)); ?>
&nbsp;</td>
<td class="even">&nbsp;<a class="link" target="_blank" href="tiki-view_cache.php?cacheId=<?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['cacheId']; ?>
">view</a>&nbsp;<a class="link" href="tiki-list_cache.php?offset=<?php echo $this->_tpl_vars['offset']; ?>
&amp;sort_mode=<?php echo $this->_tpl_vars['sort_mode']; ?>
&amp;remove=<?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['cacheId']; ?>
">remove</a>&nbsp;<a class="link" href="tiki-list_cache.php?offset=<?php echo $this->_tpl_vars['offset']; ?>
&amp;sort_mode=<?php echo $this->_tpl_vars['sort_mode']; ?>
&amp;refresh=<?php echo $this->_tpl_vars['listpages'][$this->_sections['changes']['index']]['cacheId']; ?>
">refresh</a>&nbsp;</td>
</tr>
<?php endif;  endfor; else: ?>
<tr><td class="odd" colspan="3">
No records found
</td></tr>
<?php endif; ?>
</table>
<div class="mini">
<?php if ($this->_tpl_vars['prev_offset'] >= 0): ?>
[<a class="prevnext" href="tiki-list_cache.php?find=<?php echo $this->_tpl_vars['find']; ?>
&amp;offset=<?php echo $this->_tpl_vars['prev_offset']; ?>
&amp;sort_mode=<?php echo $this->_tpl_vars['sort_mode']; ?>
">prev</a>]&nbsp;
<?php endif; ?>
Page: <?php echo $this->_tpl_vars['actual_page']; ?>
/<?php echo $this->_tpl_vars['cant_pages']; ?>

<?php if ($this->_tpl_vars['next_offset'] >= 0): ?>
&nbsp;[<a class="prevnext" href="tiki-list_cache.php?find=<?php echo $this->_tpl_vars['find']; ?>
&amp;offset=<?php echo $this->_tpl_vars['next_offset']; ?>
&amp;sort_mode=<?php echo $this->_tpl_vars['sort_mode']; ?>
">next</a>]
<?php endif;  if ($this->_tpl_vars['direct_pagination'] == 'y'): ?>
<br />
<?php unset($this->_sections['foo']);
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['cant_pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 $this->assign('selector_offset', ((is_array($_tmp=$this->_sections['foo']['index'])) ? $this->_run_mod_handler('times', true, $_tmp, $this->_tpl_vars['maxRecords']) : smarty_modifier_times($_tmp, $this->_tpl_vars['maxRecords']))); ?>
<a class="prevnext" href="tiki-list_cache.php?find=<?php echo $this->_tpl_vars['find']; ?>
&amp;offset=<?php echo $this->_tpl_vars['selector_offset']; ?>
&amp;sort_mode=<?php echo $this->_tpl_vars['sort_mode']; ?>
">
<?php echo $this->_sections['foo']['index_next']; ?>
</a>&nbsp;
<?php endfor; endif;  endif; ?>
</div>
</div>