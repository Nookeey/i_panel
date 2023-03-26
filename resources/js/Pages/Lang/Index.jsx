import React from "react";
import App from "../../Layouts/App";

export default function Index({ langs }) {
    return (
        <App>
            <div className="row">
                <div class="col-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Basic Table</h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Locale</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    { langs.map((lang) => {
                                        return (
                                            <tr key={lang.id}>
                                                <td>{lang.id}</td>
                                                <td>{lang.name}</td>
                                                <td>{lang.code}</td>
                                                <td>{lang.locale}</td>
                                            </tr>
                                        )
                                    }) }
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </App>
    );
}
