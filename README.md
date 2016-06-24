# select-nav

This WordPress plugin provides a shortcode to embed a menu in a page as a select field.

## Usage

    [select_nav menu="Menu Name"]


## Sample markup

```html
<div class="select-nav">
  <form>
    <select onchange="if(this.value) { window.location.href=this.value; }">
      <option value="http://example.com">One</option>
      <option value="http://example.com">Two</option>
      <option value="http://example.com">Three</option>
    </select>
  </form>
</div>
</div>
```