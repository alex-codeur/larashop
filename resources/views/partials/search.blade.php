<form action="{{ route('products.search') }}" class="pt-2">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Recherche..." id="search-item" name="q" value="{{ request()->q ?? '' }}">
        <div class="input-group-prepend">
            <span class="input-group-text search-box">
                <i class="fas fa-search"></i>
            </span>
        </div>
    </div>
</form>