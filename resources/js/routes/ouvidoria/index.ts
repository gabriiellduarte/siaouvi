import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../wayfinder'
/**
* @see \App\Http\Controllers\OuvidoriaController::form
* @see app/Http/Controllers/OuvidoriaController.php:13
* @route '/ouvidoria'
*/
export const form = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: form.url(options),
    method: 'get',
})

form.definition = {
    methods: ["get","head"],
    url: '/ouvidoria',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\OuvidoriaController::form
* @see app/Http/Controllers/OuvidoriaController.php:13
* @route '/ouvidoria'
*/
form.url = (options?: RouteQueryOptions) => {
    return form.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\OuvidoriaController::form
* @see app/Http/Controllers/OuvidoriaController.php:13
* @route '/ouvidoria'
*/
form.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::form
* @see app/Http/Controllers/OuvidoriaController.php:13
* @route '/ouvidoria'
*/
form.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: form.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::form
* @see app/Http/Controllers/OuvidoriaController.php:13
* @route '/ouvidoria'
*/
const formForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::form
* @see app/Http/Controllers/OuvidoriaController.php:13
* @route '/ouvidoria'
*/
formForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::form
* @see app/Http/Controllers/OuvidoriaController.php:13
* @route '/ouvidoria'
*/
formForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

form.form = formForm

/**
* @see \App\Http\Controllers\OuvidoriaController::store
* @see app/Http/Controllers/OuvidoriaController.php:62
* @route '/ouvidoria'
*/
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/ouvidoria',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\OuvidoriaController::store
* @see app/Http/Controllers/OuvidoriaController.php:62
* @route '/ouvidoria'
*/
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\OuvidoriaController::store
* @see app/Http/Controllers/OuvidoriaController.php:62
* @route '/ouvidoria'
*/
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::store
* @see app/Http/Controllers/OuvidoriaController.php:62
* @route '/ouvidoria'
*/
const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::store
* @see app/Http/Controllers/OuvidoriaController.php:62
* @route '/ouvidoria'
*/
storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

store.form = storeForm

/**
* @see \App\Http\Controllers\OuvidoriaController::show
* @see app/Http/Controllers/OuvidoriaController.php:17
* @route '/show/{id}'
*/
export const show = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/show/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\OuvidoriaController::show
* @see app/Http/Controllers/OuvidoriaController.php:17
* @route '/show/{id}'
*/
show.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    if (Array.isArray(args)) {
        args = {
            id: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        id: args.id,
    }

    return show.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\OuvidoriaController::show
* @see app/Http/Controllers/OuvidoriaController.php:17
* @route '/show/{id}'
*/
show.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::show
* @see app/Http/Controllers/OuvidoriaController.php:17
* @route '/show/{id}'
*/
show.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::show
* @see app/Http/Controllers/OuvidoriaController.php:17
* @route '/show/{id}'
*/
const showForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::show
* @see app/Http/Controllers/OuvidoriaController.php:17
* @route '/show/{id}'
*/
showForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::show
* @see app/Http/Controllers/OuvidoriaController.php:17
* @route '/show/{id}'
*/
showForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

show.form = showForm

/**
* @see \App\Http\Controllers\OuvidoriaController::edicao
* @see app/Http/Controllers/OuvidoriaController.php:45
* @route '/edicao/{id}'
*/
export const edicao = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edicao.url(args, options),
    method: 'get',
})

edicao.definition = {
    methods: ["get","head"],
    url: '/edicao/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\OuvidoriaController::edicao
* @see app/Http/Controllers/OuvidoriaController.php:45
* @route '/edicao/{id}'
*/
edicao.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    if (Array.isArray(args)) {
        args = {
            id: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        id: args.id,
    }

    return edicao.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\OuvidoriaController::edicao
* @see app/Http/Controllers/OuvidoriaController.php:45
* @route '/edicao/{id}'
*/
edicao.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edicao.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::edicao
* @see app/Http/Controllers/OuvidoriaController.php:45
* @route '/edicao/{id}'
*/
edicao.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: edicao.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::edicao
* @see app/Http/Controllers/OuvidoriaController.php:45
* @route '/edicao/{id}'
*/
const edicaoForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edicao.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::edicao
* @see app/Http/Controllers/OuvidoriaController.php:45
* @route '/edicao/{id}'
*/
edicaoForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edicao.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::edicao
* @see app/Http/Controllers/OuvidoriaController.php:45
* @route '/edicao/{id}'
*/
edicaoForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edicao.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

edicao.form = edicaoForm

/**
* @see \App\Http\Controllers\OuvidoriaController::destroy
* @see app/Http/Controllers/OuvidoriaController.php:50
* @route '/delete/{id}'
*/
export const destroy = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

destroy.definition = {
    methods: ["delete"],
    url: '/delete/{id}',
} satisfies RouteDefinition<["delete"]>

/**
* @see \App\Http\Controllers\OuvidoriaController::destroy
* @see app/Http/Controllers/OuvidoriaController.php:50
* @route '/delete/{id}'
*/
destroy.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    if (Array.isArray(args)) {
        args = {
            id: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        id: args.id,
    }

    return destroy.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\OuvidoriaController::destroy
* @see app/Http/Controllers/OuvidoriaController.php:50
* @route '/delete/{id}'
*/
destroy.delete = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::destroy
* @see app/Http/Controllers/OuvidoriaController.php:50
* @route '/delete/{id}'
*/
const destroyForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::destroy
* @see app/Http/Controllers/OuvidoriaController.php:50
* @route '/delete/{id}'
*/
destroyForm.delete = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

destroy.form = destroyForm

/**
* @see \App\Http\Controllers\OuvidoriaController::update
* @see app/Http/Controllers/OuvidoriaController.php:24
* @route '/update/{id}'
*/
export const update = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: update.url(args, options),
    method: 'post',
})

update.definition = {
    methods: ["post"],
    url: '/update/{id}',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\OuvidoriaController::update
* @see app/Http/Controllers/OuvidoriaController.php:24
* @route '/update/{id}'
*/
update.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    if (Array.isArray(args)) {
        args = {
            id: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        id: args.id,
    }

    return update.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\OuvidoriaController::update
* @see app/Http/Controllers/OuvidoriaController.php:24
* @route '/update/{id}'
*/
update.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: update.url(args, options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::update
* @see app/Http/Controllers/OuvidoriaController.php:24
* @route '/update/{id}'
*/
const updateForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\OuvidoriaController::update
* @see app/Http/Controllers/OuvidoriaController.php:24
* @route '/update/{id}'
*/
updateForm.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, options),
    method: 'post',
})

update.form = updateForm

const ouvidoria = {
    form,
    store,
    show,
    edicao,
    destroy,
    update,
}

export default ouvidoria