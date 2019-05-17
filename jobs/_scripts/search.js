function search_job(param) {
    var path = location.href.split("/jobs"),
//            param = "&tip=" + tip + "&id_pf=" + id_pf + "&id_pj=" + id_pj + "&id_ep=" + id_ep,
            url = "/jobs/_controller/search_ajax.php?q={query}";
    $("#search_job")
            .search({
                type: 'category',
                minCharacters: 1,
                fullTextSearch: true,
                forceSelection: true,
                cache: false,
                onSelect: function (result) {
                   
                },
                apiSettings: {
                    url: path[0] + url,
                    fields: {
                        results: 'items',
                        title: 'name',
                        url: 'html_url',
                        description: 'description'
                    },
                    onResponse: function (githubResponse) {
                        console.log("'it's okkkkkk");
                        var
                                response = {
                                    results: {}
                                }
                        ;
                        if (!githubResponse || !githubResponse.items) {
                            var categ = '';
                            response.results[categ] = {
//                                name: categ,
                                results: [{
                                        title: "Nu există persoana căutată"
                                    }]
                            };
                            return response;
                        }

                        // translate GitHub API response to work with search
                        $.each(githubResponse.items, function (index, item) {
                            var 
                                    maxResults = 8;
                            if (index >= maxResults) {
                                return false;
                            }
                            // create new category

                            if (response.results[''] === undefined) {
                                response.results[''] = {
//                                    name: '',
                                    results: [],
                                };
                            }
                            // add result to category
//                            if (tip == 'pf' || tip == 'pj') {
//                                response.results[categorie].results.push({
//                                    title: item.denumire,
//                                    id_apartament: item.id_apartament,
//                                    id_scara: item.id_scara,
//                                    id_asociatie: item.id_asociatie,
//                                    id_pf: item.id_pf,
//                                    id_pj: item.id_pj,
//                                    id_ep: item.id_ep,
//                                    email: item.email
////                                url: '?id='+item.id    
//
//                                });
//                            } else if (tip == 'ep') {

                                response.results[''].results.push({
                                    title: item.nume_anunt,
                                    descriere_anunt: item.descriere_anunt,
                                    companie: item.companie,
                                    judet: item.judet,
                                    abreviere_judet: item.abreviere_judet,
                                    domeniu: item.domeniu,
                                    tip_job: item.tip_job,
//                                url: '?id='+item.id    

                                });
//                            }
                        });
                        return response;
                    }
                }
            });
}