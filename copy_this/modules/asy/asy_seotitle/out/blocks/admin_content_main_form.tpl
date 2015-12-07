<tr>
  <td class="edittext">
    [{ oxmultilang ident="SEO_TITLE" }]&nbsp;
  </td>
  <td class="edittext">
    <input type="text" class="editinput" size="32" maxlength="[{$edit->oxcontents__asy_seotitle->fldmax_length}]" name="editval[oxcontents__asy_seotitle]" value="[{$edit->oxcontents__asy_seotitle->value}]" [{$readonly}]>
    [{ oxinputhelp ident="HELP_SEO_TITLE" }]
  </td>
</tr>
[{$smarty.block.parent}]