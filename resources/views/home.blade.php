@extends('layouts.main')

@section('container')

    <div class="row g-3">
        <div class="col-md-3">
            <div class="row position-sticky" style="top: 6rem;">
              <div class="position-sticky" style="top: 6rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                  <h4 class="fst-italic">Popular Tags</h4>
                  <ol>
                    @foreach ($topTags as $tag)
                        <li>
                          {{ $tag->name }}
                        </li>
                    @endforeach
                  </ol>
                </div>
              </div>
            </div>

            {{-- <div class="row position-sticky" style="top: 19rem;">
              <div class="position-sticky" style="top: 6rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                  <h4 class="fst-italic">Online Friends</h4>
                  <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                </div>
              </div>
            </div> --}}
        </div>
        
        <div class="col-md-6">
          <div class="row mb-3 g-0">
            {{-- <div class="col-md-1">
              <img src="https://source.unsplash.com/40x40?anonymous" alt="" style="border-radius: 50%">
            </div>
            <div class="col-md-11">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Search</button>
              </form>
            </div> --}}

            <table cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <img src="https://source.unsplash.com/40x40?anonymous" alt="" style="border-radius: 50%">
                </td>
                <td>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                  </form>
                </td>
              </tr>
            </table>
          </div>
          

            @foreach ($posts as $post)
                <div class="mb-3">
                    <div class="card mb-6 g-0">
                        <div class="row g-0">
                          <div class="col-md-3 mb-3">
                              <div class="mx-3 mt-4 mb-2">
                                <img src="https://source.unsplash.com/500x500?{{ $post->tags[0]->name }}" class="img-fluid rounded" alt="...">
                              </div>
                              <div class="mx-3">
                                <p class="m-0 mb-1">Posted by</p>
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-5 p-0">
                                        <img src="https://source.unsplash.com/40x40?anonymous" alt="" style="border-radius: 50%">
                                    </div>
                                    <div class="col-md-7">
                                      <small class="text-center">{{ $post->user->username }}</small><br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-9 g-0">
                              <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                @foreach ($post->tags as $tag)
                                  <p class="badge text-bg-secondary">{{ $tag->name }}</p>
                                @endforeach
                                <p class="card-text"><small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small></p>
                              </div>
                          </div>
                        </div>
                        {{-- <div class="container h-100 d-flex flex-column">
                          <div class="row h-25 bg-danger"></div>
                          <div class="row flex-grow-1 bg-primary"></div>
                        </div> --}}
                        {{-- <div class="container h-100 d-flex flex-column">
                          <div class="row flex-grow-1 bg-danger"></div>
                          <div class="row flex-grow-1 bg-primary"></div>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    
        <div class="col-md-3">
          <div class="position-sticky" style="top: 6rem;">
            <div class="p-4 mb-3 bg-body-tertiary rounded">
              <h4 class="fst-italic">Online Friends</h4>
              <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
            </div>
          </div>
        </div>
    </div>
 
@endsection